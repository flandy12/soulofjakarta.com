<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model 
{
    use HasFactory,SoftDeletes;
    /**
     * $fillable = variable yang mengidentifikasi colum pada table artikels.
     */
    protected $fillable = [
      'id_artikelpart',
      'id_category',
      'id_sub_category',
      'id_penulis',
      'judul',
      'judul_seo',
      'idartikelpart',
      'penulis',
      'hari',
      'tanggal',
      'tanggalbuat',
      'bulan',
      'jam',
      'lastposting',
      'isiutama',
      'isi',
      'tagline',
      'tag',
      'tempat',
      'gambar_besar',
      'gambar_kecil',
      'sumbergambar'
    ];
    protected $casts = [
    'timestamp' => 'date:Y-m-d',
    'created_at' => 'datetime:Y-m-d',
    ];
}
