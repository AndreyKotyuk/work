<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
//            $table->increments('id');

            $table->integer('id_category')->unsigned();;
            $table->integer('id_hour')->unsigned();;
            $table->integer('id_day')->unsigned();
            $table->primary(['id_category','id_hour','id_day'])->unsigned();;


            $table->timestamps();
        });
        Schema::table('prices', function($table) {
            $table->foreign('id_category')->references('id')->on('categories');
            $table->foreign('id_hour')->references('id')->on('hours');
            $table->foreign('id_day')->references('id')->on('day_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
