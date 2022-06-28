<?php

namespace Database\Seeders;

use App\Models\Member\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            ['VOC-1', 'Paket Voucher 1 Hari', 2000, '#', '#'],
            ['VOC-3', 'Paket Voucher 3 Hari', 5000, '#', '#'],
            ['VOC-7', 'Paket Voucher 7 Hari', 12000, '#', '#'],
            ['VOC-15', 'Paket Voucher 15 Hari', 28000, '#', '#'],
            ['VOC-30', 'Paket Voucher 30 Hari', 55000, '#', '#'],
        ];

        for ($i=0;$i<count($item);$i++){
            DB::table('member_entity__items')->insert([
                'sku' => $item[$i][0],
                'name' => $item[$i][1],
                'price' => $item[$i][2],
                'product_url' => $item[$i][3],
                'image_url' => $item[$i][4],
            ]);
        }

        User::factory(1)->create();
    }
}
