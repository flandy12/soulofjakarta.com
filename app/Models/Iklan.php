<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    use HasFactory;
    protected $table = 'iklans';
    /**
     * $fillable = variable yang mengidentifikasi colum pada table users.
     */
    protected $fillable = [
        'Iklan',
        'Url',
        'Image',
        'Nomer_Urut',
        'Status',
  ];
}
