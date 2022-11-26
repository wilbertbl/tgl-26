<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMissingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missing_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('item_code')->nullable();
            $table->string('title')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('description')->nullable();
            $table->integer('missing_item_status')->nullable();
            $table->string('img_url')->nullable();
            $table->dateTime('taken_at')->nullable();
            $table->integer('taken_by')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('missing_items');
    }
}
