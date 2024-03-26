@extends('layouts.main')



@section('content')
@if($id != null)
@section('title', 'Informações sobre o Produto ' . $id)
<h1>ID: {{ $id }}</h1>
@else
@section('title', 'Produto Não Selecionado!')
<h1>NÃO TEM ID!</h1>
@endif
@endsection