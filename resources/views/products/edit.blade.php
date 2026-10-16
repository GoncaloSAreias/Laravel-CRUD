
@extends('products.layout')

@section('content')
    <h2>Editar Produto</h2>

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome do produto</label>
        <input id="name" name="name"
               value="{{ old('name', $product->name) }}" required>

        <label for="detail">Detalhes do produto</label>
        <textarea id="detail" name="detail" required>{{ old('detail', $product->detail) }}</textarea>

        <button type="submit">Guardar alterações</button>
    </form>

    <a href="{{ route('products.index') }}">Cancelar</a>
@endsection
