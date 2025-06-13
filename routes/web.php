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
Route::get(
    '/piacere', 
    function (){
        return 'Ciao';
    }
);

Route::get(
    '/', 
    function (){
        return 'Ciao';
    }
);
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
    '/Blog', 
    function (){
        return 'Blog';
    }
);

Route::get(
    '/Recensioni', 
    function (){
        return "Pagina di recensioni";
    }
);

Route::get(
    '/Contatti', 
    function (){
        return "Contatti";
    }
);