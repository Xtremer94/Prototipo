@extends('layouts.lay')

@section('content')

<div style="width: 60%; margin-left: 5%; margin-top: 2%;">

<form method="POST" action="{{ route('client.store') }}">
  <fieldset>
    <legend>Agregar un nuevo cliente</legend>
    
    <div class="form-group">
        @csrf
        <label  for="nit" class="form-label mt-4">NIT:</label>
        <input class="form-control" type="text"name="nit" value="{{ old('nit') }}">
        @error('nit')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    <div class="form-group">
        @csrf
        <label  for="name" class="form-label mt-4">Nombre:</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="email" class="form-label mt-4">Email:</label>
        <input class="form-control" type="text" name="email" value="{{ old('email') }}">
        @error('email')
            <p style="color:red;">{{ $message }}</p>
        @enderror
</div>

    <div class="form-group">
    <label for="contact" class="form-label mt-4">Numero telefonico:</label>
        <input class="form-control" type="text" name="contact" value="{{ old('contact') }}">
        @error('contact')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group">
        <label for="location" class="form-label mt-4">Direccion:</label>
        <input class="form-control" type="text" name="location" value="{{ old('location') }}">
        @error('location')
            <p style="color:red;">{{ $message }}</p>
        @enderror
    </div>
    
    <br>
        <input class="btn btn-primary" type="submit" value="Crear">
        <a href="{{ route('client.index') }}" class="btn btn-info">Cancelar</a>
    
  </fieldset>
</form>

</div>

@endsection
