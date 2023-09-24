@extends('layouts.lay')

@section('content')

    <li><a href="{{ route('product.create') }}" style="color:green">Ingresar nuevo producto</a></li><br>

    <ul>
        @forelse ($products as $product)
            <li><a href="{{ route('product.show', ['product' => $product->id]) }}">{{ $product->name }}</a> |
                <a href="{{ route('product.edit', ['product' => $product->id]) }}">Editar</a> |
                <form method="POST" action="{{ route('product.destroy', ['product' => $product->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form>
            @empty
                <p style="color:red">Aun no hay productos ingresados</p>
        @endforelse
    </ul>
@endsection
