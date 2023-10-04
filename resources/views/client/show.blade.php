@extends('layouts.lay')

@section('content')

<div  class="table table-hover" style="margin: 2%;" >
    
    
    <table style="font-size: 25px; width: 40%;">
        <tr class="table-active" >
            <th>Nit: </th>
            <td>{{ $client->nit }}</td>
        </tr>
        <tr class="table-active" >
            <th>Nombre: </th>
            <td>{{ $client->name }}</td>
        </tr>
        <tr class="table-active" >
            <th>Edad: </th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr class="table-active" >
            <th>Número: </th>
            <td>{{ $client->contact }}</td>
        </tr>
        <tr class="table-active" >
            <th>Dirección: </th>
            <td>{{ $client->location }}</td>
        </tr>
    </table>
    <br><br>
    <a href="{{ route('client.index') }}" class="btn btn-info">Volver</a>
</div>

@endsection
