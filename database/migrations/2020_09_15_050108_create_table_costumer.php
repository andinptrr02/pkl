<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCostumer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_costumer');
            $table->text('alamat');
            $table->date('tgllahir');
            $table->string('status');
            $table->string('Jenkel');
            $table->integer('NIK');
            $table->string('NoHp');
            $table->string('username');
            $table->string('password');
            $table->string('photo');
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
        Schema::dropIfExists('costumer');
    }
}
