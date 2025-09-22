<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('siswa')->insert([
            ['nisn' => '0012345678', 'nama_siswa' => 'Rina Putri', 'jenis_kelamin' => 'Perempuan', 'tahun_masuk' => 2022],
            ['nisn' => '0012345679', 'nama_siswa' => 'Andi Setiawan', 'jenis_kelamin' => 'Laki-Laki', 'tahun_masuk' => 2023],
            ['nisn' => '0012345680', 'nama_siswa' => 'Budi Hartono', 'jenis_kelamin' => 'Laki-Laki', 'tahun_masuk' => 2021],
        ]);
    }
}
