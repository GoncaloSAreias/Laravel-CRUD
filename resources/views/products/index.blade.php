
@extends('products.layout')

@section('content')
    <h2>Lista de Produtos</h2>

    <a href="{{ route('products.create') }}">Adicionar produto</a>

    @if ($products->count())
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Detalhes</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>
                            <a href="{{ route('products.show', $product) }}">Ver</a>
                            <a href="{{ route('products.edit', $product) }}">Editar</a>

                            <form action="{{ route('products.destroy', $product) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    onclick="return confirm('Tens a certeza que queres eliminar?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    @else
        <p>Ainda não existem produtos registados.</p>
    @endif
@endsection
