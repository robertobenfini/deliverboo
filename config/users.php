<?php

return [
    [
        'name' => 'Giuliano',
        'lastname' => 'Gostinfini',
        'email' => 'user1@gmail.com',
        'restaurant' => [
            'name' => 'Pizzeria Romana Bassa e Scrocchiarella',
            'address' => 'Via Roma 36, Torino',
            'p_iva' => 1545262584451,
            'photo' => 'https://media-assets.lacucinaitaliana.it/photos/61fac9aebe6f37f54cf8d0de/16:9/w_2560%2Cc_limit/pizzeria-popolare.jpg',
        ],
        'typologies' => ['Pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, basilico',
                'description' => 'Classica pizza romana fatta secondo tradizione, bassa e scrocchiarella',
            ],
        ],
    ],
    [
        'name' => 'Giuseppe',
        'lastname' => 'Funicello',
        'email' => 'user2@gmail.com',
        'restaurant' => [
            'name' => 'Sushi nomade digitale',
            'address' => 'Via Firenze 45, Torino',
            'p_iva' => 1545267884452,
            'photo' => 'https://www.sushienoodles.it/wp-content/uploads/2018/07/corridoio-tavoli-ristorante-sushi.jpg',
        ],
        'typologies' => ['Giapponese'],
        'dishes' => [
            [
                'name' => 'Sushi Misto',
                'visible' => true,
                'price' => 23,
                'ingredients' => 'Riso, salmone, tonno, gamberetti, alga nori',
                'description' => 'Assortimento di sushi tradizionale',
            ],
        ],
    ],
    [
        'name' => 'Luca',
        'lastname' => 'Formicola',
        'email' => 'user3@gmail.com',
        'restaurant' => [
            'name' => 'Ristorante Pizzeria Sushi',
            'address' => 'Via Firenze 45, Torino',
            'p_iva' => 1545267884453,
            'photo' => 'https://www.sushienoodles.it/wp-content/uploads/2018/07/corridoio-tavoli-ristorante-sushi.jpg',
        ],
        'typologies' => ['Giapponese', 'Pizza'],
        'dishes' => [
            [
                'name' => 'Pizza Onigiri',
                'visible' => true,
                'price' => 32,
                'ingredients' => 'Riso, alghe, tonno, avocado, salsa di soia',
                'description' => 'Pizza con base di riso e topping giapponesi',
            ],
        ],
    ],
    [
        'name' => 'Gigi',
        'lastname' => "D'alessio",
        'email' => 'user4@gmail.com',
        'restaurant' => [
            'name' => "Ristorante Le domeniche d'agosto",
            'address' => 'Via Napoli 25, Torino',
            'p_iva' => 1545267884454,
            'photo' => 'https://www.napolitoday.it/~media/horizontal-hi/47615476189093/figlia-marenaro-d-alessio-2.jpg',
        ],
        'typologies' => ['Carne', 'Pizza', 'Pesce', 'Frutti di mare'],
        'dishes' => [],
    ],
];