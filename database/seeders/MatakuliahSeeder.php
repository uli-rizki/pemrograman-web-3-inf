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
        $data_mk = [
            [
                'kode_mk' => 'INF01',
                'nama_mk' => 'Pemrograman Web',
                'sks' => 3
            ],
            [
                'kode_mk' => 'INF02',
                'nama_mk' => 'Sistem Basis Data',
                'sks' => 3
            ]
        ];

        foreach($data_mk as $mk) {
            $simpan = Matakuliah::create([
                'kode_mk' => $mk['kode_mk'],
                'nama_mk' => $mk['nama_mk'],
                'sks' => $mk['sks'],
            ]);
        }
    }
}
