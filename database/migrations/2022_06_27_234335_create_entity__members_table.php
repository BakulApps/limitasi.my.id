<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_entity__users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_fullname');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->string('user_phone');
            $table->string('user_address');
            $table->string('user_image');
            $table->integer('user_balance')->nullable();
            $table->rememberToken();
        });

        Schema::create('member_entity__items', function (Blueprint $table){
            $table->id();
            $table->string('sku');
            $table->string('name');
            $table->string('price');
            $table->string('product_url');
            $table->string('image_url');
        });

        Schema::create('member_entity__invoices', function (Blueprint $table){
            $table->id('invoice_id');
            $table->integer('invoice_item');
            $table->integer('invoice_user');
            $table->string('invoice_reference')->nullable();
            $table->string('invoice_merchantref');
            $table->integer('invoice_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member_entity__users');
        Schema::dropIfExists('member_entity__items');
        Schema::dropIfExists('member_entity__invoices');
    }
};
