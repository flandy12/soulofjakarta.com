<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->integer('id_artikelpart');
            $table->integer('id_category');
            $table->integer('id_sub_category');
            $table->integer('id_penulis');
            $table->string('part',5)->default(1);
            $table->string('judul')->unique();
            $table->string('judul_seo');
            $table->string('penulis');
            $table->string('hari');
            $table->string('tanggal');
            $table->string('tanggalbuat');
            $table->string('bulan');
            $table->string('jam');
            $table->string('lastposting');
            $table->string('isiutama');
            $table->longText('isi');
            $table->string('tag');
            $table->string('tagline');
            $table->string('tempat');
            $table->string('gambar_besar');
            $table->string('gambar_kecil');
            $table->string('sumbergambar')->default('Souja-Foto');
            $table->enum('headline',['Y','N'])->default('N');
            $table->integer('dibaca')->default(1);
            $table->enum('status',['Y','N'])->default('N');
            $table->softDeletes(); 
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
        Schema::dropIfExists('articles');
    }
}
