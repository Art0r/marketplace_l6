@extends('layouts.app')
@section('content')
<h1>Criar Produto</h1>
<form action="{{route('admin.products.store')}}" method="post">

<!--<input type="hidden" name="_token" value="{{csrf_token()}}">-->
@csrf

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
    
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Descrição</label>
        <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
    
        @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Conteúdo</label>
        <textarea type="body" name="body" class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}"></textarea>
    
        @error('body')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Preço</label>
        <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
    
        @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
    </div>

    <div class="form-group">
        <label>Slug</label>
        <input type="text" name="slug" class="form-control">
    </div>

    <div class="form-group">
        <label>Categorias</label>
        <select name="categories[]" id="" class="form-control" multiple>
            @foreach($categories as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-lg btn-success " type="submit">Criar Produto</button>
    </div>
</form>
@endsection
