@extends('layouts.lay')

@section('content')
    <form method="POST" action="{{ route('client.update', $client->id) }}">
        @csrf
        @method('PUT')

        <label>NIT:</label>
        <input type="text"name="nit" value="{{ $client->nit }}"><br><br>
        @error('nit')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{ $client->name }}"><br><br>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Email:</label>
        <input type="text" name="email" value="{{ $client->email }}"><br><br>
        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Numero telefonico:</label>
        <input type="text" name="contact" value="{{ $client->contact }}"><br><br>
        @error('contact')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Direccion:</label>
        <input type="text" name="location" value="{{ $client->location }}"><br><br>
        @error('location')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Actualizar">
    </form>
@endsection
