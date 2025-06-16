<?php

use Illuminate\Support\Facades\Route;// modo per importare la classe

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
            'titolo' => 'Cartolina 1',
            'para' => 'Descrizione della cartolina 1. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ],
        [
            'titolo' => 'Cartolina 2',
            'para' => 'Descrizione della cartolina 2. Questa è una breve descrizione che
                fornisce informazioni sulla cartolina.',
            'button' => 'Aggiungi al carrello'
        ],
        [
            'titolo' => 'Cartolina 3',
            'para' => 'Descrizione della cartolina 3. Questa è una breve descrizione che
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


Route::get('/Dettagli/{id}', function ($id) {
    $cards = [
    [ // se uso un ID devo ricordarmi che è un codice numerico univoco e intero
        
        'id' => 1,
        'titolo' => 'Cartolina 1',
        'para' => 'Descrizione della cartolina 1. Questa è una breve descrizione che
            fornisce informazioni sulla cartolina.',
        'button' => 'Aggiungi al carrello'
    ],
    [
        'id' => 2,
        'titolo' => 'Cartolina 2',
        'para' => 'Descrizione della cartolina 2. Questa è una breve descrizione che
            fornisce informazioni sulla cartolina.',
        'button' => 'Aggiungi al carrello'
    ],
    [
        'id' => 3,
        'titolo' => 'Cartolina 3',
        'para' => 'Descrizione della cartolina 3. Questa è una breve descrizione che
            fornisce informazioni sulla cartolina.',
        'button' => 'Aggiungi al carrello'
    ]
    ];

    foreach($cards as $card){
        if($id == $card['id']) {
            return view('detail', ['card' => $card]);
        }       
    }
    abort(404);
});

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