<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPhoneNumberTable extends Migration
{
    public function up()
    {
        Schema::create('users_phone_number', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_phone_number');
    }
}
