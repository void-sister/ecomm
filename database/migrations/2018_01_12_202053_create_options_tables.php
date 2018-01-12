<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->char('category_name', 50);
        });

        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('item_id');
            $table->char('model_name', 50);
            $table->char('sex', 1)->nullable();
        });

        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->char('size', 50);

            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::create('colors', function(Blueprint $table) {
            $table->increments('id');
            $table->char('color', 50);
        });

        Schema::create('sexes', function(Blueprint $table) {
            $table->increments('id');
            $table->char('sex', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');        
        Schema::dropIfExists('models');
        Schema::dropIfExists('sizes');        
        Schema::dropIfExists('colors');
        Schema::dropIfExists('sexes');
    }
}
