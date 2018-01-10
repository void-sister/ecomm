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
        Schema::create('item_types', function (Blueprint $table) {
            $table->increments('id');
            $table->char('item_type', 25);
        });
        
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_type_id')->unsigned();
            $table->char('item_name', 25);
            $table->unsignedInteger('item_price')->default(0);
            $table->unsignedInteger('item_qty')->default(0);
            $table->text('item_description')->nullable();
            $table->text('other_item_details')->nullable();

            $table->foreign('item_type_id')
                ->references('id')->on('item_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_types');        
        Schema::dropIfExists('items');
    }
}
