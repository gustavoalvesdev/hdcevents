@extends('layouts.main')

@section('title', 'Nossos Produtos')


@section('content')
        <h1>Tela de Produtos</h1>
        @if($busca != null)
            <h2>Você buscou por: {{$busca['search']}}</h2>
        @endif
@endsection