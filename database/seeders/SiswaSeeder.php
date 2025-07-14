<?php

namespace Database\Seeders;

use App\Models\Siswa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds
     */
    public function run(): void
    {
        Siswa::factory()->create([
            'nama' => 'Ahmad Aulia Fahlevi',
            'alamat' => 'Pidie',
            'agama' => 'Islam',
            'jenis_kelamin' => '1', // 1 untuk laki-laki
            'sekolah_asal' => 'SMK Negeri 1 Pidie',
        ]);
    }
}
