<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;

class TypologieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tipologie di ristoranti
        $typologies = [
            "Italiano",
            "Messicano",
            "Giapponese",
            "Cinese",
            "Fast food",
            "Pesce",
            "Carne",
            "Pizza",
            "Frutti di mare",
        ];

        foreach ($typologies as $typology) {
            Typology::create(['name' => $typology]);
        }
    }
}
