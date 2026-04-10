<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// panggil class model
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_mahasiswa = [
            [
                'nim' => '2101001',
                'nama_lengkap' => 'Uli Rizki',
                'kelas' => 'Kelas C1'
            ],
            [
                'nim' => '2101002',
                'nama_lengkap' => 'Adam',
                'kelas' => 'Kelas C1'
            ]
        ];

        foreach($data_mahasiswa as $mahasiswa) {
            $simpan = Mahasiswa::create([
                'nim' => $mahasiswa['nim'],
                'nama_lengkap' => $mahasiswa['nama_lengkap'],
                'kelas' => $mahasiswa['kelas']
            ]);
        }
    }
}
