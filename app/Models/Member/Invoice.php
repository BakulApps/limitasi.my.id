<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table    = 'member_entity__invoices';
    protected $fillable = ['invoice_id', 'invoice_user', 'invoice_item', 'invoice_reference', 'invoice_merchantref', 'invoice_amount'];
    protected $primaryKey   = 'invoice_id';
    public $timestamps  = false;

    public function user()
    {
        return $this->hasOne(
            User::class,
            'user_id',
            'invoice_user'
        );
    }

    public function item()
    {
        return $this->hasOne(
            Item::class,
            'id',
            'invoice_item'
        );
    }
}
