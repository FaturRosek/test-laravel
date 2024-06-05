<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenerbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penerbit::create([
            'nama_penerbit' => 'Gramedia',
            'alamat' => 'Malang',
            'no_telepon' => '081981289112',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Salemba',
            'alamat' => 'Sorbejek',
            'no_telepon' => '081981289181',
        ]);
        Penerbit::create([
            'nama_penerbit' => 'Ikhsan',
            'alamat' => 'Arosbaya',
            'no_telepon' => '081981289111',
        ]);
    }
}
