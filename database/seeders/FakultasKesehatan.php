<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FakultasKesehatan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fakultasKes = Fakultas::create([
            'name' => 'Kesehatan'
        ]);

        // Menambahkan jurusan pada fakultas kesehatan
        $fakultasKes->jurusan()->createMany([
            ['name' => 'Pendidikan Kedokteran','user_id' => 5,6,8],
            ['name' => 'Kesehatan Masyarakat','user_id' =>  9,10,13,14],
        ]);
    }
}
