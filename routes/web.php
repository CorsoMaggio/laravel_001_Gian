<?php

use Illuminate\Support\Facades\Route;// modo per importare la classe

//dominio= http://127.0.0.1:8000/
// dominio ha una radice principale che non cambia mai
// e un URI, acronimo di Uniform Resource Identifier, è un codice che permette di identificare qualsiasi elemento su internet.
//dominio= google.it
//URI= /ciao
//URL=google.it/piacere

//GET? RICHIEST GET
//prima
// $ruote = new Route();
// $route->get();
//Metodo funzionante

/* esempio
$uri = '/';
*/
/*Route::get(
    '/piacere', 
    function (){
        return 'Ciao';
    }
);*/

Route::get(
    '/', 
    function (){
        return view('welcome');
    }
);

Route::get(
    '/Prodotti', 
    function (){
        $cards = [
        [
            'titolo' => 'Descrizione 1',
            'para' => 'Descrizione della cartolina. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ],
        [
            'titolo' => 'Descrizione 2',
            'para' => 'Descrizione della cartolina. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ],
        [
            'titolo' => 'Descrizione 2',
            'para' => 'Descrizione della cartolina. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ],
        [
            'titolo' => 'Descrizione 4',
            'para' => 'Descrizione della cartolina. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ]
        ];
        return view('products', ['cards' => $cards]);
    }
);

Route::get(
    '/Contatti', 
    function (){
        return view('form');
    }
);
/* Cosi lo ha fatto Melania
$articoli = [
    [
        'titolo' => 'Introduzione a PHP',
        'descrizione' => 'Una guida per principianti sul linguaggio PHP.',
        'autore' => 'Mario Rossi'
    ],
    [
        'titolo' => 'Laravel per tutti',
        'descrizione' => 'Scopri come costruire applicazioni web con Laravel.',
        'autore' => 'Lucia Bianchi'
    ],
],
    [
        'titolo' => 'Programmazione moderna in PHP',
        'descrizione' => 'Tecniche avanzate e best practices nel 2025.',
        'autore' => 'Giovanni Verdi'
    ]
];
*/

/*
Route::get(
    '/Home', 
    function (){
        return 'Home';
    }
);

Route::get(
    '/Chi-sono', 
    function (){
        return 'Gianpierre Carreno Garcia';
    }
);

Route::get(
    '/articolo/Blog', 
    function (){
        return 'Blog';
    }
);

Route::get(
    '/articolo/Review', 
    function (){
        return "Pagina di recensioni";
    }
);
//rotte parametriche o dinamica
Route::get(
    '/articolo/{nome}', 
    function ($nome){
        return "Articolo di " . $nome;
    }
);

Route::get(
    '/somma/{num1}/{num2}', 
    function ($num1, $num2){
        return "risultato = " . $num1 + $num2;
    }
);

Route::get(
    '/Contatti', 
    function (){
        return "Contatti";
    }
);*/