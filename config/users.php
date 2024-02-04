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
            'typologies' => ['Pizza', 'Italiano'],
        ],
        'dishes' => [
            [
                'name' => 'Pizza Margherita',
                'visible' => true,
                'price' => 8,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, basilico',
                'description' => 'Classica pizza romana fatta secondo tradizione, bassa e scrocchiarella',
            ],
            [
                'name' => 'Pizza Napoletana',
                'visible' => true,
                'price' => 9,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, acciughe, origano',
                'description' => 'Pizza napoletana tradizionale con acciughe e origano',
            ],
            [
                'name' => 'Pizza Quattro Stagioni',
                'visible' => true,
                'price' => 10,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, funghi, prosciutto cotto, carciofi, olive',
                'description' => 'Pizza divisa in quattro parti, con funghi, prosciutto cotto, carciofi e olive rappresentanti le quattro stagioni',
            ],
            [
                'name' => 'Pizza Diavola',
                'visible' => true,
                'price' => 9,
                'ingredients' => 'Farina, acqua, olio, sale, pepe, pomodoro, mozzarella, salame piccante',
                'description' => 'Pizza piccante con mozzarella e salame piccante',
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
            'typologies' => ['Giapponese'],
        ],
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
            'typologies' => ['Giapponese', 'Pizza'],
        ],
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
            'typologies' => ['Carne', 'Pizza', 'Pesce', 'Frutti di mare'],
        ],
        
        'dishes' => [],
    ],
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'email' => 'user5@gmail.com',
        'restaurant' => [
            'name' => 'Trattoria da Mario',
            'address' => 'Via Garibaldi 10, Torino',
            'p_iva' => 1545267884455,
            'photo' => 'https://www.trattoriadamario.it/wp-content/uploads/2019/11/ristorante-pizzeria-trattoria-da-mario-scarperia.jpg',
            'typologies' => ['Italiano'],
        ],
        'dishes' => [
            [
                'name' => 'Risotto ai Funghi Porcini',
                'visible' => true,
                'price' => 15,
                'ingredients' => 'Riso, funghi porcini, brodo, burro, cipolla, vino bianco, parmigiano',
                'description' => 'Risotto cremoso con funghi porcini freschi',
            ],
        ],
    ],
    [
        'name' => 'Maria',
        'lastname' => 'Bianchi',
        'email' => 'user6@gmail.com',
        'restaurant' => [
            'name' => 'Trattoria da Maria',
            'address' => 'Via Roma 78, Torino',
            'p_iva' => 1545267884456,
            'photo' => 'https://www.trattoriadamaria.it/wp-content/uploads/2021/05/trattoria-da-maria-arredamento-interno.jpg',
            'typologies' => ['Italiano'],
        ],
        'dishes' => [
            [
                'name' => 'Tagliatelle al Ragu',
                'visible' => true,
                'price' => 12,
                'ingredients' => 'Tagliatelle, carne macinata, pomodoro, cipolla, carota, sedano, vino rosso',
                'description' => 'Tagliatelle fresche con salsa di ragu tradizionale',
            ],
        ],
    ],
];
