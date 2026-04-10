<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // deklarasi nama tabel database
    protected $table = 'mahasiswa';

    // deklarasi primary key
    protected $primaryKey = 'mahasiswa_id';

    // deklarasi kolom yang bisa diubah
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'kelas'
    ];
}
