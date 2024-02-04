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
        $typologies = config('typologies');

        foreach ($typologies as $typology) {
            Typology::create([
                'name' => $typology['name'],
                'image' => $typology['image'],
            ]);
        }
    }
}
