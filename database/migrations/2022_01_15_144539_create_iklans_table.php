<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIklansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tb_iklan', function (Blueprint $table) {
        //     $table->id('idiklan');
        //     $table->string('jenisiklan');
        //     $table->string('iklan');
        //     $table->text('linkiklan');
        //     $table->string('idmenu');
        //     $table->string('gambar');
        //     $table->string('lebar')->default(270);
        //     $table->string('panjang')->default(220);
        //     $table->string('nourutiklan');
        //     $table->integer('hits');
        //     $table->enum('status',['Y','N'])->default('N');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iklans');
    }
}
