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
      'idartikelpart',
      'idmenu',
      'idsubmenu',
      'judul',
      'judul_seo',
      'penulis',
      'hari',
      'tanggal',
      'tanggalbuat',
      'jam',
      'bulan',
      'last_posting',
      'schedule_date',
      'schedule_time',
      'isi_utama',
      'isi',
      'tagline',
      'tag',
      'tempat',
      'part',
      'image',
      'dibaca',
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