<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['judul' => 'Upacara Bendera', 'gambar' => 'https://via.placeholder.com/200?text=Upacara'],
            ['judul' => 'Lomba Futsal', 'gambar' => 'https://via.placeholder.com/200?text=Futsal'],
            ['judul' => 'Kegiatan Pramuka', 'gambar' => 'https://via.placeholder.com/200?text=Pramuka'],
        ];

        foreach ($data as $item) {
            Galeri::create($item);
        }
    }
}
