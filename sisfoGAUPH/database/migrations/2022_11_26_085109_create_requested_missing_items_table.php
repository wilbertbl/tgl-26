<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequestedMissingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_missing_items', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('missing_item_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('missing_item_status_id')->nullable();
            $table->dateTime('requested_at')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requested_missing_items');
    }
}
