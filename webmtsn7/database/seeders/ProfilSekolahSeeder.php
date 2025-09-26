<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfilSekolah;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       ProfilSekolah::create([
            'nama' => 'SMP Negeri Contoh',
            'deskripsi' => 'SMP Negeri Contoh adalah sekolah unggulan dengan berbagai kegiatan akademik dan non-akademik.'
        ]);
    }
}
