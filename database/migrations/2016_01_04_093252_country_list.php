<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CountryList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_list', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('syria_id')->unsigned();
            $table->integer('sweden_id')->unsigned();
            $table->integer('india_id')->unsigned();
            $table->integer('china_id')->unsigned();
            $table->integer('vietnamn_id')->unsigned();
            // $table->foreign('syr_id')->references('id')->on('syria');
            // $table->foreign('swe_id')->references('id')->on('sweden');
            // $table->foreign('ind_id')->references('id')->on('india');
            // $table->foreign('chi_id')->references('id')->on('china');
            // $table->foreign('vie_id')->references('id')->on('vietnamn');
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
        Schema::drop('country_list');
    }
}
