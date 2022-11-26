<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReplacementClassesTable extends Migration
{
  /**

     * Run the migrations.

     *

     * @return void

     */
     

     
    public function up()
    {
        Schema::create('replacement-classes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->string('mata_kuliah')->nullable();
            $table->string('kelas')->nullable();
            $table->date('jadwal_kuliah')->nullable();
            $table->time('jam_kuliah')->nullable();
            $table->date('tanggal_replacement')->nullable();
            $table->time('jam_replacement')->nullable();
            $table->string('alasan')->nullable();
            });
    }

   /**

     * Run the migrations.

     *

     * @return void

     */
     
    public function down()
    {
        Schema::drop('replacement-classes');
    }
}