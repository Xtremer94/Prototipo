@extends('layouts.lay')

@section('content')

<div style="width: 60%; margin-left: 5%; margin-top: 2%;">
    
    <form method="POST" action="{{ route('product.update', $product->id) }}">
        <fieldset>
            <legend>Editar producto {{ $product->name }}</legend>
            @csrf
            @method('PUT')
            
            <div class="form-group">
                @csrf
                <label  for="name" class="form-label mt-4">Nombre del producto:</label>
                <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                @error('name')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <label  for="stock" class="form-label mt-4">Stock del producto:</label>
                <input class="form-control" type="number" name="stock" value="{{ $product->stock }}">
                @error('stock')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="price" class="form-label mt-4">Precio del producto::</label>
                <input class="form-control" type="text" name="price" value="{{ $product->price }}">
                @error('price')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <br>
            
            <input class="btn btn-primary" type="submit" value="Actualizar">
            <a href="{{ route('product.index') }}" class="btn btn-info">Cancelar</a>
        </fieldset>
    </form>
    
</div>

@endsection
