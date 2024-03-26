<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Gustavo';

    $arr = [10, 23, 35, 42, 57];

    $names = ['Gustavo', 'Matheus', 'Maria', 'Carol'];

    return view('welcome', 
                    [
                        'nome' => $name, 
                        'idade' => 31, 
                        'profissao' => 
                        'Programador',
                        'arr' => $arr,
                        'nomes' => $names
                    ]
                );
});


Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function($id) {
    return view('product', ['id' => $id]);
});

Route::get('/produtos_teste/{id?}', function($id = null) {
    return view('product', ['id' => $id]);
});
