<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Typology;

class TypologieSeeder extends Seeder
{
    
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
            "Vegetariano",
            "Vegano",
            "Steakhouse",
            "Caffetteria",
            "Barbecue",
            "Ethnico",
            "Tapas",
            "Brasserie",
            "Fusion",
            "Gourmet",
            "Pasticceria",
        ];

        foreach ($typologies as $typology) {
            // // Controlla se la tipologia esiste già nel database
            // $existingTypology = Typology::where('name', $typology)->first();

            // Se non esiste, crea la tipologia
            // if (!$existingTypology) {
                Typology::create(['name' => $typology]);
            // }
        }
    }
}
