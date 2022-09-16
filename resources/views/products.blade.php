@extends('layouts.main')

@section('title', 'HDC Events | Produtos')

@section('content')
    <h1>Tela de Produtos</h1>
    @if ($busca != '')
        <p>O usuário está buscando por: {{$busca}}</p>
    @endif
    <a href="/">Voltar para Home</a>
@endsection
