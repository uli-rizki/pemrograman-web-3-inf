<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'nim' => '2210001',
                'nama_lengkap' => 'Uli Rizki',
                'kelas' => 'Kelas C1'
            ],
            [
                'nim' => '2210002',
                'nama_lengkap' => 'Adam',
                'kelas' => 'Kelas C2'
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
