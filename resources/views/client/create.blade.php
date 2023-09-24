@extends('layouts.lay')

@section('content')
    <form method="POST" action="{{ route('client.store') }}">
        @csrf
        <label>NIT:</label>
        <input type="text"name="nit" value="{{ old('nit') }}"><br><br>
        @error('nit')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}"><br><br>
        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Numero telefonico:</label>
        <input type="text" name="contact" value="{{ old('contact') }}"><br><br>
        @error('contact')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <label for="">Direccion:</label>
        <input type="text" name="location" value="{{ old('location') }}"><br><br>
        @error('location')
            <p style="color:red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Crear">
    </form>
@endsection
