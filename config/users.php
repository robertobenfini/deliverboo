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
    [
        'name' => 'Mario',
        'lastname' => 'Rossi',
        'email' => 'user5@gmail.com',
        'restaurant' => [
            'name' => 'Trattoria da Mario',
            'address' => 'Via Garibaldi 10, Torino',
            'p_iva' => 1545267884455,
            'photo' => 'https://www.trattoriadamario.it/wp-content/uploads/2019/11/ristorante-pizzeria-trattoria-da-mario-scarperia.jpg',
        ],
        'typologies' => ['Italiana'],
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
        ],
        'typologies' => ['Italiana'],
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
    [
        'name' => 'Antonio',
        'lastname' => 'Esposito',
        'email' => 'user7@gmail.com',
        'restaurant' => [
            'name' => 'Ristorante Napoli Mia',
            'address' => 'Via Napoli 15, Torino',
            'p_iva' => 1545267884457,
            'photo' => 'https://www.ristorantenapolimia.it/wp-content/uploads/2021/08/interno1.jpg',
        ],
        'typologies' => ['Italiana', 'Pesce'],
        'dishes' => [
            [
                'name' => 'Spaghetti alle Vongole',
                'visible' => true,
                'price' => 18,
                'ingredients' => 'Spaghetti, vongole, aglio, prezzemolo, peperoncino, vino bianco',
                'description' => 'Spaghetti con vongole veraci e aromi mediterranei',
            ],
        ],
    ],
    [
        'name' => 'Elena',
        'lastname' => 'Conti',
        'email' => 'user8@gmail.com',
        'restaurant' => [
            'name' => 'Ristorante La Terrazza',
            'address' => 'Via della Rocca 5, Torino',
            'p_iva' => 1545267884458,
            'photo' => 'https://www.ristorantelaterrazza.it/wp-content/uploads/2019/12/ristorante-salone2.jpg',
        ],
        'typologies' => ['Italiana', 'Internazionale'],
        'dishes' => [
            [
                'name' => 'Filetto di Manzo alla Griglia',
                'visible' => true,
                'price' => 25,
                'ingredients' => 'Filetto di manzo, sale, pepe, olio extravergine di oliva',
                'description' => 'Filetto di manzo argentino alla griglia con contorno di stagione',
            ],
        ],
    ],
    [
        'name' => 'Paolo',
        'lastname' => 'Gallo',
        'email' => 'user9@gmail.com',
        'restaurant' => [
            'name' => 'Trattoria del Gallo',
            'address' => 'Via Garibaldi 22, Torino',
            'p_iva' => 1545267884459,
            'photo' => 'https://www.trattoriadelgallo.it/wp-content/uploads/2018/06/sfondo1.jpg',
        ],
        'typologies' => ['Italiana'],
        'dishes' => [
            [
                'name' => 'Tortellini in Brodo',
                'visible' => true,
                'price' => 14,
                'ingredients' => 'Tortellini freschi, brodo di carne',
                'description' => 'Tortellini artigianali in brodo caldo fatto in casa',
            ],
        ],
    ],
    [
        'name' => 'Carlo',
        'lastname' => 'Marini',
        'email' => 'user10@gmail.com',
        'restaurant' => [
            'name' => 'Trattoria della Nonna',
            'address' => 'Via Garibaldi 30, Torino',
            'p_iva' => 1545267884460,
            'photo' => 'https://www.trattoriadellanonna.it/wp-content/uploads/2019/03/trattoria-della-nonna.jpg',
        ],
        'typologies' => ['Italiana'],
        'dishes' => [
            [
                'name' => 'Lasagna al Forno',
                'visible' => true,
                'price' => 16,
                'ingredients' => 'Lasagna, carne macinata, pomodoro, besciamella, parmigiano',
                'description' => 'Classica lasagna al forno con ingredienti freschi',
            ],
        ],
    ],
    [
        'name' => 'Federico',
        'lastname' => 'Ricci',
        'email' => 'user11@gmail.com',
        'restaurant' => [
            'name' => 'Osteria del Sole',
            'address' => 'Via Umberto I 12, Torino',
            'p_iva' => 1545267884461,
            'photo' => 'https://www.osteriadelsoletorino.it/wp-content/uploads/2018/06/IMG_3531-1024x683.jpg',
        ],
        'typologies' => ['Italiana'],
        'dishes' => [
            [
                'name' => 'Risotto alla Milanese',
                'visible' => true,
                'price' => 17,
                'ingredients' => 'Riso, zafferano, brodo, burro, cipolla, vino bianco, parmigiano',
                'description' => 'Risotto cremoso con zafferano, tipico della tradizione milanese',
            ],
        ],
    ],
    [
        'name' => 'Simona',
        'lastname' => 'Rinaldi',
        'email' => 'user12@gmail.com',
        'restaurant' => [
            'name' => 'Pasticceria Dolce Vita',
            'address' => 'Via Vittorio Emanuele 5, Torino',
            'p_iva' => 1545267884462,
            'photo' => 'https://www.pasticceriadolcevita.it/wp-content/uploads/2019/12/ristorante2.jpg',
        ],
        'typologies' => ['Dolci', 'Caffetteria'],
        'dishes' => [
            [
                'name' => 'Tiramisù',
                'visible' => true,
                'price' => 6,
                'ingredients' => 'Savoiardi, caffè, mascarpone, uova, cacao',
                'description' => 'Il classico tiramisù fatto in casa',
            ],
        ],
    ],
    [
        'name' => 'Lorenzo',
        'lastname' => 'Moretti',
        'email' => 'user13@gmail.com',
        'restaurant' => [
            'name' => 'Gelateria La Dolce Vita',
            'address' => 'Via Garibaldi 55, Torino',
            'p_iva' => 1545267884463,
            'photo' => 'https://www.gelaterialadolcevita.it/wp-content/uploads/2021/05/ristorante-salone2.jpg',
        ],
        'typologies' => ['Gelateria'],
        'dishes' => [
            [
                'name' => 'Gelato alla Fragola',
                'visible' => true,
                'price' => 4,
                'ingredients' => 'Fragole, latte, zucchero',
                'description' => 'Gelato cremoso alle fragole fresche',
            ],
        ],
    ],
    [
        'name' => 'Giulia',
        'lastname' => 'Lombardi',
        'email' => 'user14@gmail.com',
        'restaurant' => [
            'name' => 'Bar Centrale',
            'address' => 'Piazza Castello 1, Torino',
            'p_iva' => 1545267884464,
            'photo' => 'https://www.barcentraletorino.it/wp-content/uploads/2021/07/IMG_0484.jpg',
        ],
        'typologies' => ['Bar', 'Caffetteria'],
        'dishes' => [
            [
                'name' => 'Cappuccino',
                'visible' => true,
                'price' => 2.5,
                'ingredients' => 'Caffè, latte, schiuma di latte',
                'description' => 'Il classico cappuccino italiano',
            ],
        ],
    ],
];
