<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    use HasFactory;
    protected $table = "sub_kategoris";
    protected $fillable = [
        'id_sub_kategori',
        'sub_name_kategori',
    ];
}
