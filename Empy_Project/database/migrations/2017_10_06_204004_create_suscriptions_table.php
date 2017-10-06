<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->tinyInteger('status');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('plans_id')->unsigned();
            $table->foreign('plans_id')->references('id')->on('plans');
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
        Schema::dropIfExists('suscriptions');
    }
}
