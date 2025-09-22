<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('berita')->insert([
            [
                'judul' => 'Juara 1 Lomba Sains',
                'isi' => 'SMA Negeri 1 Contoh berhasil meraih juara 1 lomba sains tingkat provinsi.',
                'tanggal' => '2025-09-10',
                'gambar' => 'sains.jpg',
                'id_user' => 1
            ],
            [
                'judul' => 'Peringatan Hari Guru',
                'isi' => 'Sekolah mengadakan acara khusus untuk memperingati Hari Guru.',
                'tanggal' => '2025-09-22',
                'gambar' => 'guru.jpg',
                'id_user' => 2
            ],
        ]);
    }
}
