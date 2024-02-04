<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RestaurantSeeder::class,
            DishSeeder::class,       
            TypologieSeeder::class,  
            OrderSeeder::class,     
        ]);
    }
}
