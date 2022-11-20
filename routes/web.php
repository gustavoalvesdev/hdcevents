<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = 'Gustavo';

    return view('welcome', ['nome' => $name, 'idade' => 31, 'profissao' => 'Programador']);
});


Route::get('/contact', function() {
    return view('contact');
});

Route::get('/produtos', function() {
    return view('products');
});
