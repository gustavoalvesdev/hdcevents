<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
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
    }

    public function create()
    {
        return view('events.create');
    }
}
