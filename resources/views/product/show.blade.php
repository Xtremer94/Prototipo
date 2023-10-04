@extends('layouts.lay')

@section('content')


<div style="margin: 2%;" >
    
    
    <table  class="table table-hover" style="font-size: 25px; width: 50%;">
        <tr class="table-active">
            <th>Nombre: </th>
            <td>{{ $product->name }}</td>
        </tr>
        <tr class="table-active">
            <th>Stock del producto: </th>
            <td>{{ $product->stock }}</td>
        </tr>
        <tr class="table-active">
            <th>Precio del producto: </th>
            <td>Q {{ $product->price }}</td>
        </tr>
        
    </table>
    <br><br>
    <a href="{{ route('product.index') }}" class="btn btn-info">Volver</a>
</div>



@endsection
