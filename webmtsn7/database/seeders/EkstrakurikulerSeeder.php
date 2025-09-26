<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;


class EkstrakurikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['nama' => 'Pramuka', 'deskripsi' => 'Melatih kedisiplinan dan kepemimpinan.'],
            ['nama' => 'PMR', 'deskripsi' => 'Palang Merah Remaja, kegiatan sosial dan kesehatan.'],
            ['nama' => 'Futsal', 'deskripsi' => 'Ekstrakurikuler olahraga futsal.'],
            ['nama' => 'Paduan Suara', 'deskripsi' => 'Mengembangkan bakat seni musik.'],
        ];

        foreach ($data as $ekskul) {
            Ekstrakurikuler::create($ekskul);
        }
    }
}
