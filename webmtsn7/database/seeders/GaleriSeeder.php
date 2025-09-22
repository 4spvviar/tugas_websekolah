<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('galeri')->insert([
            ['judul' => 'Upacara 17 Agustus', 'keterangan' => 'Dokumentasi peringatan HUT RI', 'file' => 'upacara.jpg', 'kategori' => 'Foto', 'tanggal' => '2025-08-17'],
            ['judul' => 'Lomba Futsal', 'keterangan' => 'Final turnamen futsal antar kelas', 'file' => 'futsal.mp4', 'kategori' => 'Video', 'tanggal' => '2025-07-20'],
        ]);
    }
}
