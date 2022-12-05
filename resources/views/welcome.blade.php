<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum Título</h1>

        <img src="/img/banner.jpg" alt="Banner">

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

        <!-- Comentário HTML comum que você consegue ver -->

        @for($i = 0; $i < count($arr); $i++)
            @if($arr[$i] % 2 == 0)
            <p>{{ $arr[$i] }} - {{ $i }} - É par</p>
            @else
                <p>{{ $arr[$i] }} - {{ $i }}</p>
            @endif
        @endfor

        <h3>Lista de Classificação</h3>

        <ol>
        @foreach($nomes as $nome)
            <li>{{ $nome }} - {{ $loop->index }}</li>
        @endforeach 
        </ol>

        {{-- Essse comentário aqui é sobre a regra de negócio, manolo. Não vaza, não! --}}

        <h2>

            @php 

            $name = "Gustavo";

            echo $name;

            @endphp

        </h2>
    </body>
</html>
