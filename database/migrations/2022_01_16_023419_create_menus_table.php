<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('tb_menu', function (Blueprint $table) {
        //     $table->id('id_menu');
        //     $table->string('nama');
        //     $table->string('link');
        //     $table->string('nourut');
        //     $table->string('level');
        //     $table->enum('footer',['Y','N'])->default('N');
        //     $table->enum('spesial',['Y','N'])->default('N');
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
        Schema::dropIfExists('tb_menu');
    }
}
