@extends('layouts.app')
@section('content')

@if($store)

@if(!$store)
<a href="{{route('admin.stores.create')}}" class="btn btn-sm btn-success">Criar Loja</a>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Loja</th>
            <th>Numero de Produtos</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>{{$store->products->count()}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-danger" type="submit">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
    </tbody>
 </table>
@else

@if(!$store)
<a href="{{route('admin.stores.create')}}" class="btn btn-sm btn-success">Criar Loja</a>
@endif

<h2>Nenhuma Loja a ser exibida</h2>
@endif
@endsection
