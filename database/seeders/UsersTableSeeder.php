<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use App\Livewire\Pages\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //     User::create([
        //         'username' => 'fatur',
        //         'jenis_kelamin' => 'L',
        //         'nama' => 'fatur',
        //         'no_telepon' => '0829277292',
        //         'level' => 'superadmin',
        //         'email' => 'fatur@gmail.com',
        //         'password' => Hash::make('12345'),
        //         'remember_token' => Str::random(10),
        //     ]);
        //     User::create([
        //         'username' => 'hanal',
        //         'jenis_kelamin' => 'L',
        //         'nama' => 'Kufir',
        //         'no_telepon' => '0829277292',
        //         'level' => 'user',
        //         'email' => 'kufir@gmail.com',
        //         'password' => Hash::make('12345'),
        //         'remember_token' => Str::random(10),
        //     ]);
        User::factory(50)->create();
    }
}
