<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'=> 'Agus Sanjaya',
        //     'email' => 'agussanjaya@gmail.com',
        //     'alamat'=> 'Bandung',
        //     'password'=>''
        // ]);
        // User::create([
        //     'name'=> 'Budiman',
        //     'email' => 'budiman@gmail.com',
        //     'alamat'=> 'Padang',
        //     'password'=>''
        // ]);

        User::factory()->count(10)->create();
    }
}
