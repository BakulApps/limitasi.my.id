<?php

namespace App\Http\Controllers;

use App\Models\Member\Invoice;
use App\Models\Member\Item;
use App\Models\Member\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RouterOS\Client;
use RouterOS\Query;

class MainController extends Controller
{
    protected $data;

    protected $route;

    public function __construct()
    {
        $this->route = new Client([
            'host' => env('MIKROTIK_HOST'),
            'user' => env('MIKROTIK_USER'),
            'pass' => env('MIKROTIK_PASS'),
            'port' => (int) env('MIKROTIK_PORT')
        ]);
    }

    public function home()
    {

    }

    public function voucher(Request $request)
    {
        if ($request->isMethod('post')){
            if ($request->_type == 'store' && $request->_data == 'payment'){
                $msg = $this->RequestPayment($this->getData($request->item_id));
                if ($msg->success == true){
                    $invoice = new Invoice();
                    $invoice->invoice_user = 1;
                    $invoice->invoice_item = $request->item_id;
                    $invoice->invoice_reference = $msg->data->reference;
                    $invoice->invoice_merchantref = $msg->data->merchant_ref;
                    $invoice->invoice_amount = $msg->data->amount;
                    $invoice->save();

                    $msg->data->amount = 'Rp. ' . number_format($msg->data->amount);
                    $msg->data->expired_time = Carbon::parse($msg->data->expired_time)->translatedFormat('l, d M Y H:i');
                }
            }
            return response()->json($msg);
        }
        else {
            $this->data['items'] = Item::orderBy('id', 'ASC')->get();
            return view('voucher', $this->data);
        }
    }

    public function getData($item_id) : object
    {
        $item = Item::select('sku', 'name', 'price', 'product_url', 'image_url')->find($item_id);
        $item->quantity = 1;
        $data = (object) [
            'merchantRef' => 'INV'. random_int(1000, 9999),
            'amount' => $item->price,
            'customer' => User::select('user_fullname','user_email', 'user_phone')->find(1),
            'item' => [json_decode($item)]
        ];
        return $data;
    }

    public function RequestPayment($data)
    {
        $data = [
            'method' => 'QRISD',
            'merchant_ref' => $data->merchantRef,
            'amount' => $data->amount,
            'customer_name' => $data->customer->user_fullname,
            'customer_email' => $data->customer->user_email,
            'customer_phone' => $data->customer->user_phone,
            'order_items' => $data->item,
            'callback_url' => 'http://103.172.204.69:2400/beli-voucher/callback',
            'return_url' => 'http://103.172.204.69:2400/beli-voucher',
            'expired_time' => (time() + (24 * 60 * 60)), // 1 jam
            'signature' => hash_hmac('sha256', env('TRIPAY_MERCHANTCODE') . $data->merchantRef . $data->amount, env('TRIPAY_PRIVATEKEY'))
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT => true,
            CURLOPT_URL => env('TRIPAY_URL') . '/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . env('TRIPAY_APIKEY')],
            CURLOPT_FAILONERROR => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        return json_decode(empty($error) ? $response : $error);
    }

    public function CallBackPayment(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, env('TRIPAY_PRIVATEKEY'));

        if ($signature !== (string) $callbackSignature) {
            return 'Invalid signature';
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return 'Invalid callback event, no action was taken';
        }

        $data = json_decode($json);
        $uniqueRef = $data->merchant_ref;
        $status = strtoupper((string) $data->status);

        /*
        |--------------------------------------------------------------------------
        | Proses callback untuk closed payment
        |--------------------------------------------------------------------------
        */
        if (1 === (int) $data->is_closed_payment) {
            $invoice = Invoice::where('invoice_merchantref', $uniqueRef)->first();

            if (! $invoice) {
                return 'No invoice found for this unique ref: ' . $uniqueRef;
            }

            $invoice->update(['invoice_status' => $status]);
            if ($status == 'PAID'){
                $invoice->update(['invoice_desc', ]);
            }
            return response()->json(['success' => true]);
        }


        /*
        |--------------------------------------------------------------------------
        | Proses callback untuk open payment
        |--------------------------------------------------------------------------
        */
        $invoice = Invoice::where('invoice_merchantref', $uniqueRef)
            ->where('status', 'UNPAID')
            ->first();

        if (! $invoice) {
            return 'Invoice not found or current status is not UNPAID';
        }

        if ((int) $data->total_amount !== (int) $invoice->total_amount) {
            return 'Invalid amount, Expected: ' . $invoice->total_amount . ' - Received: ' . $data->total_amount;
        }

        switch ($data->status) {
            case 'PAID':
                $invoice->update(['status' => 'PAID']);
                return response()->json(['success' => true]);

            case 'EXPIRED':
                $invoice->update(['status' => 'EXPIRED']);
                return response()->json(['success' => true]);

            case 'FAILED':
                $invoice->update(['status' => 'FAILED']);
                return response()->json(['success' => true]);

            default:
                return response()->json(['error' => 'Unrecognized payment status']);
        }
    }

    public function getVoucherCode($packet)
    {
        $query = (new Query('/ip/hotspot/user/print'));
        $query->where('profile', $packet);
        $response = $this->route->query($query)->read();
        return $response[0]['name'];
    }
}
