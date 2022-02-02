<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "tb_artikel";
    /**
     * $fillable = variable yang mengidentifikasi colum pada table artikels.
     */
    protected $fillable = [
      'idmenu',
      'idsubmenu',
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
      'gambar_kecil'
    ];
    protected $casts = [
    'timestamp' => 'date:Y-m-d',
    'created_at' => 'datetime:Y-m-d',
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
    return $date->format('jS \of F Y h:i:s A');
    }
}