@extends('layouts.lay')

@section('content')

<div class="d-grid gap-2" style="margin: 2%">
  <a href="{{ route('client.create') }}" style="display: inline-block; width: 25%;">
    <button class="btn btn-lg btn-primary" type="button" style="width: 100%;">
      <i class="fa-solid fa-user-plus"></i> Ingresar nuevo cliente
    </button>
  </a>
</div>



<div style="width: 80%;">
  
  @if ( $clients->count() > 0 )
  <table class="table table-hover" style="margin:5%">
    <colgroup>
      <col style="width: 70%;">
      <col style="width: 15%;">
      <col style="width: 15%;">
    </colgroup>
    <thead>
      
      <tr class="table-dark">
        <th scope="col">Cliente</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @endif
      
      @forelse ($clients as $client)
      
      
      <tr >
        <th scope="row"><a class="text-info" href="{{ route('client.show', ['client' => $client->id]) }}">{{ $client->name }}</a></th>
        <td>
          <a  href="{{ route('client.edit', ['client' => $client->id]) }}"  >
            <button type="button" class="btn btn-outline-warning widthmax" ><i class="fa-solid fa-pen-to-square"></i> Editar</button>
          </a> 
        </td>
        <td>  
          <form method="POST" action="{{ route('client.destroy', ['client' => $client->id]) }}" class="widthmax">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-outline-danger widthmax" value="&#x1f167; ELIMINAR">

          </form>
        </td>
      </tr>
      
      
      @empty
      <p style="color:red; margin: 2%">Aun no hay clientes ingresados</p>
    </li>
    @endforelse
  </tbody>
</table>

</div>


@endsection
