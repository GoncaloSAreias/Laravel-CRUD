
@extends('products.layout')

@section('content')
    <h2>Adicionar Produto</h2>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label for="name">Nome do produto</label>
        <input id="name" name="name" value="{{ old('name') }}" required>

        <label for="detail">Detalhes do produto</label>
        <textarea id="detail" name="detail" required>{{ old('detail') }}</textarea>

        <button type="submit">Guardar produto</button>
    </form>

    <a href="{{ route('products.index') }}">Voltar à lista</a>
@endsection
