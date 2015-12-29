<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flight_id');
            $table->integer('f_id');
            $table->string('fly_id');
            $table->integer('flight_fid');
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
        Schema::drop('flys');
    }
}
