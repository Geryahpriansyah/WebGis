<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\menu;

class menuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus =[
            [
                'name' => 'Bacoon Cheeseburger',
                'Deskripsi' => 'burger Chesse',
                'price' => 35000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Mexican Burger',
                'Deskripsi' => 'Mexican Burger',
                'price' => 40000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Burger Klasik',
                'Deskripsi' => 'Burger Klasik',
                'price' => 30000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Pizza Margherita',
                'Deskripsi' => 'Pizza Margherita',
                'price' => 240495,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Pizza Pepperoni',
                'Deskripsi' => 'Pizza Pepperoni',
                'price' => 288000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'name' => 'Pizza Seafood',
                'Deskripsi' => 'Pizza Seafood',
                'price' => 260000,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],

        ];

       foreach ($menus as $key => $menu) {
        menu::create($menu);
       }
    }
}
