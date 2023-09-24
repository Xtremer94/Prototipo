@extends('layouts.lay')

@section('content')

<ul>
    <h3>Nombre del producto:</h3>
    <p>{{ $product->name }}</p>

    <h3>Stock del producto :</h3>
    <p>{{ $product->stock }}</p>

    <h3>Precio del producto:</h3>
    <p>{{ $product->price }}</p>

</ul>

@endsection
