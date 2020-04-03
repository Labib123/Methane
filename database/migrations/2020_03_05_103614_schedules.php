<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Schedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Sun')->nullable($value = true);
            $table->string('Mon')->nullable($value = true);
            $table->string('Tue')->nullable($value = true);
            $table->string('Wed')->nullable($value = true);
            $table->string('Thu')->nullable($value = true);
            $table->string('Fri')->nullable($value = true);
            $table->string('Sat')->nullable($value = true);
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
        //
    }
}
