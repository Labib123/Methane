<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('fullname');
            $table->integer('totalpoints');
            $table->unsignedBigInteger('schedule');
            $table->foreign('schedule')->references('id')->on('schedules')->onDelete('cascade')->nullable($value = true);  ;
            $table->string('ecolevel')->nullable($value = true)	;
            $table->string('address')->default('null')	;
            $table->string('usertype')->nullable($value = true);
            $table->string('materialType');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('isAdmin')->nullable($value = true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
