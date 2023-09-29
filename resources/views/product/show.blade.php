@extends('layouts.lay')

@section('content')


<div style="margin: 2%;" >
    
    
    <table style="font-size: 25px; width: 40%;">
        <tr>
            <th>Nombre: </th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr>
            <th>Stock del producto: </th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr>
            <th>Precio del producto: </th>
            <td>Q {{ $product->price }}</td>
        </tr>
        
    </table>
    <br><br>
    <a href="{{ route('product.index') }}" class="btn btn-info">Volver</a>
</div>



@endsection
