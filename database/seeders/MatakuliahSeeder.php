<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Matakuliah;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_matakuliah = [
            [
                'kode_mk' => 'INF001',
                'nama_mk' => 'Pemrograman Web',
                'sks' => 3
            ],
            [
                'kode_mk' => 'INF002',
                'nama_mk' => 'Multimedia',
                'sks' => 3
            ],
        ];

        foreach($data_matakuliah as $matakuliah) {
            $simpan = Matakuliah::create([
                'kode_mk' => $matakuliah['kode_mk'],
                'nama_mk' => $matakuliah['nama_mk'],
                'sks' => $matakuliah['sks']
            ]);
        }
    }
}

