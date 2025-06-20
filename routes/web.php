<?php

use Illuminate\Support\Facades\Route;// modo per importare la classe
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);

Route::get('/Prodotti', [PageController::class, 'products']);

Route::get('/Contatti', [PageController::class, 'contacts']);


Route::get('/Dettagli/{id}', [PageController::class, 'detail']);

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