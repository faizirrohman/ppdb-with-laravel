<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_daftar', 'nama_lengkap', 'jk', 'alamat_lengkap', 'agama', 'asal_smp', 'jurusan'
    ];
}
