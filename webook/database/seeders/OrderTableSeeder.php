<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'users_id' => 1,
            'tanggal_order'=> '2023-05-05',
            'jumlah_total'=> 15
        ]);
        Order::create([
            'users_id' => 2,
            'tanggal_order'=> '2023-05-05',
            'jumlah_total'=> 15
        ]);
    }
}
