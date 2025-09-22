<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ekstrakurikuler')->insert([
            ['nama_ekskul' => 'Pramuka', 'pembina' => 'Pak Agus', 'jadwal_latihan' => 'Sabtu 08:00', 'deskripsi' => 'Melatih kedisiplinan dan kepemimpinan', 'gambar' => 'pramuka.jpg'],
            ['nama_ekskul' => 'Futsal', 'pembina' => 'Pak Budi', 'jadwal_latihan' => 'Jumat 15:00', 'deskripsi' => 'Latihan futsal mingguan', 'gambar' => 'futsal.jpg'],
        ]);
    }
}
