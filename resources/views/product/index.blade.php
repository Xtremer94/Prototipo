@extends('layouts.lay')

@section('content')

<div class="d-grid gap-2" style="margin:2%">
    <a href="{{ route('product.create') }}" style="width: 25%;">
        <button class="btn btn-lg btn-primary" type="button" style="width: 100%;">
        <i class="fa-solid fa-circle-plus"></i> Ingresar nuevo producto
        </button>
    </a>
    
</div>


<div style="width: 80%;">
    
    @if ( $products->count() > 0 )
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
            
            @forelse ($products as $product)
            
            <tr >
                <th scope="row"><a class="text-info" href="{{ route('product.show', ['product' => $product->id]) }}">{{ $product->name }}</a></th>
                <td>
                    <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                        <button type="button" class="btn btn-outline-warning widthmax" ><i class="fa-solid fa-pen-to-square"></i> Editar</button>
                    </a> 
                </td>
                <td>  
                    <form method="POST"  action="{{ route('product.destroy', ['product' => $product->id]) }}" class="widthmax">
                        @csrf
                        @method('DELETE')
                        <input type="submit"class="btn btn-outline-danger widthmax" value="&#x1f167; ELIMINAR" >
                    </form>
                </td>
            </tr>
            
            
            @empty
            <p style="color:red">Aun no hay productos ingresados</p>
        </li>
        @endforelse
    </tbody>
</table>

</div>

@endsection
