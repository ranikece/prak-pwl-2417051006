<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        Kelas::create(['nama_kelas' => 'Kelas A']);
        Kelas::create(['nama_kelas' => 'Kelas B']);
        Kelas::create(['nama_kelas' => 'Kelas C']);
        Kelas::create(['nama_kelas' => 'Kelas D']);
    }
}