@extends('layouts.lay')

@section('content')
<div style="width: 60%; margin-left: 5%; margin-top: 2%;">
    
    <form method="POST" action="{{ route('client.update', $client->id) }}">
        <fieldset>
            <legend>Editar cliente {{ $client->name }}</legend>
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label  for="nit" class="form-label mt-4">NIT:</label>
                <input class="form-control" type="text"name="nit" value="{{ $client->nit }}">
                @error('nit')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                @csrf
                <label  for="name" class="form-label mt-4">Nombre:</label>
                <input class="form-control" type="text" name="name" value="{{ $client->name }}">
                @error('name')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email" class="form-label mt-4">Email:</label>
                <input class="form-control" type="text" name="email" value="{{ $client->email }}">
                @error('email')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="contact" class="form-label mt-4">Numero telefonico:</label>
                <input class="form-control" type="text" name="contact" value="{{ $client->contact }}">
                @error('contact')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="location" class="form-label mt-4">Direccion:</label>
                <input class="form-control" type="text" name="location" value="{{ $client->location }}">
                @error('location')
                <p style="color:red;">{{ $message }}</p>
                @enderror
            </div>
            
            <br>
            
            <input class="btn btn-primary" type="submit" value="Actualizar">
            <a href="{{ route('client.index') }}" class="btn btn-info">Cancelar</a>
        </fieldset>
    </form>
    
</div>
@endsection
