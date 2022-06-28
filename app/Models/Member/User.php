<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table    = 'member_entity__users';
    protected $fillable = ['user_id', 'user_fullname', 'user_email', 'user_password', 'user_phone', 'user_address', 'user_image', 'user_balance', 'user_mac'];
    protected $primaryKey   = 'user_id';
    public $timestamps      = false;
}
