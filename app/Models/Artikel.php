<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = "artikels";
    /**
     * $fillable = variable yang mengidentifikasi colum pada table artikels.
     */
    protected $fillable = [
        'Kategori',
        'Sub_Kategori',
        'Judul',
        'Image',
        'Sumber',
        'Artikel',
  ];
}
