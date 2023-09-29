@extends('layouts.lay')

@section('content')

<div style="margin: 2%;" >
    
    
    <table style="font-size: 25px; width: 40%;">
        <tr>
            <th>Nit: </th>
            <td>{{ $client->nit }}</td>
        </tr>
        <tr>
            <th>Nombre: </th>
            <td>{{ $client->name }}</td>
        </tr>
        <tr>
            <th>Edad: </th>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <th>Número: </th>
            <td>{{ $client->contact }}</td>
        </tr>
        <tr>
            <th>Dirección: </th>
            <td>{{ $client->location }}</td>
        </tr>
    </table>
    <br><br>
    <a href="{{ route('client.index') }}" class="btn btn-info">Volver</a>
</div>

@endsection
