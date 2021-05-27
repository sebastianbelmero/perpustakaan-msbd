<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_induk',
        'nama',
        'username',
        'password',
        'kelas',
        'tgl_lahir',
        'jenis_kelamin',
    ];

    // protected $hidden = [
    //     'password',
    // ];
}
