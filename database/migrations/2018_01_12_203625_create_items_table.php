<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->char('item_name', 25);
            $table->unsignedInteger('item_price')->default(0);
            $table->integer('category_id')->unsigned();
            $table->text('item_description')->nullable();
            $table->text('other_item_details')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');
            
        });

        
        if (Schema::hasTable('models')) {
            Schema::table('models', function (Blueprint $table) {
                $table->foreign('item_id')->references('id')->on('items');
            });
        }       
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}


