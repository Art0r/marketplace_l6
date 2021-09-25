@extends('layouts.app')
@section('content')
<a href="{{route('admin.categories.create')}}" class="btn btn-sm btn-success">Criar Categoria</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{route('admin.categories.edit', ['category' => $p->id])}}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{route('admin.categories.destroy', ['category' => $p->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-sm btn-danger" type="submit">Remover</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
 </table>
{{$categories->links()}}

@endsection
