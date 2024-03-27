<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $req)
    {
        $busca = $req->only('search');

        return view('products', ['busca' => $busca]);
    }
    
    public function getById(int $id)
    {
        return view('product', ['id' => $id ?? 1]);
    }
}
