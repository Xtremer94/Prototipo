@extends('layouts.lay')

@section('content')

<ul>
    <h3>Nit:</h3>
    <p>{{ $client->nit }}</p>

    <h3>Nombre:</h3>
    <p>{{ $client->name }}</p>

    <h3>Edad:</h3>
    <p>{{ $client->email }}</p>

    <h3>Numero::</h3>
    <p>{{ $client->contact }}</p>

    <h3>Direccion:</h3>
    <p>{{ $client->location }}</p>
</ul>

@endsection
