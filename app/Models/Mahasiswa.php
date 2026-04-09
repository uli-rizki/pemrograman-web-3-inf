<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $primaryKey = 'mahasiswa_id';

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'kelas'
    ];
}
