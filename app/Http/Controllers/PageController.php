<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('welcome');
    }

    public function products()
    {
        $cards = [
            [
                'titolo' => 'Cartolina 1',
                'para' => 'Descrizione della cartolina 1. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=1'
            ],
            [
                'titolo' => 'Cartolina 2',
                'para' => 'Descrizione della cartolina 2. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=2'
            ],
            [
                'titolo' => 'Cartolina 3',
                'para' => 'Descrizione della cartolina 3. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=3'
            ]
        ];

        return view('products', ['cards' => $cards]);
    }

    public function contacts()
    {
        return view('form');
    }

    public function detail($id)
    {
        $cards = [
            [
                'id' => 1,
                'titolo' => 'Cartolina 1',
                'para' => 'Descrizione della cartolina 1. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=1'
            ],
            [
                'id' => 2,
                'titolo' => 'Cartolina 2',
                'para' => 'Descrizione della cartolina 2. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=2'
            ],
            [
                'id' => 3,
                'titolo' => 'Cartolina 3',
                'para' => 'Descrizione della cartolina 3. Questa è una breve descrizione che fornisce informazioni sulla cartolina.',
                'button' => 'Aggiungi al carrello',
                'image' => 'https://picsum.photos/1920/1080/?random=3'
            ]
        ];

        foreach ($cards as $card) {
            if ($id == $card['id']) {
                return view('detail', ['card' => $card]);
            }
        }

        abort(404);
    }
}

