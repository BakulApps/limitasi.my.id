<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table    = 'member_entity__items';
    protected $fillable = ['id', 'sku', 'name', 'price', 'product_url', 'image_url'];
    protected $primaryKey   = 'id';
    public $timestamps      = false;
}
