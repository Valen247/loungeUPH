<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nim')->nullable();
            $table->string('nama')->nullable();
            $table->string('kelas')->nullable();
            $table->string('email')->nullable();
            $table->integer('id_proram')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mahasiswas');
    }
}
