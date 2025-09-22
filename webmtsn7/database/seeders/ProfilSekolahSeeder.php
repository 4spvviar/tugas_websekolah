<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('profil_sekolah')->insert([
            'nama_sekolah' => 'MTsN 7 Tasikmalaya',
            'kepala_sekolah' => 'Iki Alpian Hilmi, S.Pd',
            'logo' => 'logo.png',
            'npsn' => '20278531',
            'alamat' => 'Jl. Pendidikan No. 45',
            'kontak' => '08123456789',
            'visi_misi' => 'Menjadi sekolah unggul dalam prestasi dan karakter',
            'tahun_berdiri' => 1990,
            'deskripsi' => 'Sekolah favorit di kota contoh',
        ]);
    }
}
