<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nomor_induk',
        'kelas',
        'tgl_lahir',
        'jenis_kelamin',
    ];

    // protected $hidden = [
    //     'password',
    // ];
}
