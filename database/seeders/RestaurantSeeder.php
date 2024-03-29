<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Schema;
use App\Models\Typology;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Restaurant::truncate();
        Schema::enableForeignKeyConstraints();

        $users = config('users');
        $count = 1;

        foreach ($users as $userData) {
            $restaurantData = $userData['restaurant'];

            $newRestaurant = new Restaurant();

            $newRestaurant->user_id = $count;
            $newRestaurant->name = $restaurantData['name'];
            $newRestaurant->address = $restaurantData['address'];
            $newRestaurant->p_iva = $restaurantData['p_iva'];
            $newRestaurant->photo = $restaurantData['photo'];

            $newRestaurant->save();

            // Associating typologies with the restaurant
            foreach ($restaurantData['typologies'] as $typologyName) {
                $typology = Typology::firstOrCreate(['name' => $typologyName]);
                $newRestaurant->typologies()->attach($typology);
            }

            $count++;
        }
    }
}
