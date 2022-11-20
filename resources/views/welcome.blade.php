<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Algum Título</h1>
        @if(10 > 15)
        <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == 'Pedro')
        <p>O nome é Pedro</p>
        @elseif($nome == 'Gustavo')
        <p>O nome é Gustavo</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        <h2>{{ $nome }} tem {{ $idade }} anos e exerce a profissão de {{ $profissao }}.</h2>
    </body>
</html>
