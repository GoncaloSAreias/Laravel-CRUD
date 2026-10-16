
@extends('products.layout')

@section('content')
    <h2>Detalhes do Produto</h2>

    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Detalhes:</strong> {{ $product->detail }}</p>

    <a href="{{ route('products.edit', $product) }}">Editar</a>
    <a href="{{ route('products.index') }}">Voltar à lista</a>
@endsection
