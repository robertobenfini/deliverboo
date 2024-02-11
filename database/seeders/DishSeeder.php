<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    
    public function run()
    {
        $data = config('users');
        $count = 1;
        foreach ($data as $user) {
            foreach ($user['dishes'] as $plate) {
                $newDish = new Dish();
                
                $newDish->restaurant_id = $count;
                $newDish->name = $plate['name'];
                $newDish->photo = $plate['photo'];
                $newDish->visible = $plate['visible'];
                $newDish->price = $plate['price'];
                $newDish->description = $plate['description'];
                $newDish->ingredients = $plate['ingredients'];
                $newDish->save();
            }
            $count++;
        }
    }
}
