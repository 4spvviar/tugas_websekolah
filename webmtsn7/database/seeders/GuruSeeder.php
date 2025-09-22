<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('guru')->insert([
            ['nama_guru' => 'Siti Aminah', 'nip' => '19800101', 'mapel' => 'Matematika', 'foto' => 'guru1.jpg'],
            ['nama_guru' => 'Ahmad Fauzi', 'nip' => '19820502', 'mapel' => 'Bahasa Inggris', 'foto' => 'guru2.jpg'],
            ['nama_guru' => 'Dewi Lestari', 'nip' => '19851003', 'mapel' => 'Fisika', 'foto' => 'guru3.jpg'],
        ]);
    }
}
