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
            'title'=>[
                'Cartolina 1',
                'Cartolina 2', 
                'Cartolina 3', 
                'Cartolina 4'
            ], 
            'description' =>[
                'Descrizione della cartolina. Questa è una breve descrizione che fornisce informazioni sulla cartolina1',
                'Descrizione della cartolina. Questa è una breve descrizione che fornisce informazioni sulla cartolina2',
                'Descrizione della cartolina. Questa è una breve descrizione che fornisce informazioni sulla cartolina3', 
                'Descrizione della cartolina. Questa è una breve descrizione che fornisce informazioni sulla cartolina4'
            ],
            'button'=>[
                'Aggiungi al carrello',
                'Aggiungi al carrello', 
                'Aggiungi al carrello',
                'Aggiungi al carrello'
            ], 
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