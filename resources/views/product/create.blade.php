@extends('layouts.lay')

@section('content')
    <form method="POST" action="{{ route('product.store') }}">
        @csrf
        <label>Nombre del producto:</label>
        <input type="text"name="name" value="{{  old('name') }}"><br><br>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">stock del producto:</label>
        <input type="number" name="stock" value="{{  old('stock') }}"><br><br>
        @error('stock')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Precio del producto:</label>
        <input type="text" name="price" value="{{  old('price') }}"><br><br>
        @error('price')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Crear">
    </form>
@endsection
