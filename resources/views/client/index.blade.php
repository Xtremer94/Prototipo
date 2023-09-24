@extends('layouts.lay')

@section('content')

    <li><a href="{{ route('client.create') }}" style="color:green">Ingresar nuevo cliente</a></li><br>

    <ul>
        @forelse ($clients as $client)
            <li><a href="{{ route('client.show', ['client' => $client->id]) }}">{{ $client->name }}</a> |
                <a href="{{ route('client.edit', ['client' => $client->id]) }}">Editar</a> |
                <form method="POST" action="{{ route('client.destroy', ['client' => $client->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE">
                </form>
            @empty
                <p style="color:red">Aun no hay clientes ingresados</p>
        @endforelse
    </ul>
@endsection
