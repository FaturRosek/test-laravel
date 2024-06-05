<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'judul_buku' => 'Si Kancil',
            'id_penerbit' => 1,
            'tahun_buku' => 2024,
            'jumlah_buku' => 100,
            'tanggal_pengadaan' => now()
        ]);
        Buku::create([
            'judul_buku' => 'Cinderella',
            'id_penerbit' => 1,
            'tahun_buku' => 2024,
            'jumlah_buku' => 100,
            'tanggal_pengadaan' => now()
        ]);
        Buku::create([
            'judul_buku' => 'Si Kancil 2',
            'id_penerbit' => 1,
            'tahun_buku' => 2024,
            'jumlah_buku' => 100,
            'tanggal_pengadaan' => now()
        ]);
    }
}
