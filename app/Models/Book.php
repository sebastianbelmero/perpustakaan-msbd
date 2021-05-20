<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'isbn',
        'judul',
        'penerbit',
        'pengarang',
        'tahun',
        'tgl_masuk',
        'edisi',
        'website',
        'email',
        'jumlah',
        'id_kategori'
    ];
}
