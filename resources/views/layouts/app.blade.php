<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace l6</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 40px;">
    @auth
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Marketplace L6</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item @if(request()->is('admin/stores')) active @endif">
                    <a class="nav-link" aria-current="page" href="{{route('admin.stores.index')}}">Lojas</a>
                </li>
                <li class="nav-item @if(request()->is('admin/products')) active @endif">
                    <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>
                </li>
                <li class="nav-item @if(request()->is('admin/categories')) active @endif">
                    <a class="nav-link" href="{{route('admin.categories.index')}}">Categorias</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="nav-link" href="#" onclick="event.preventDefault(); 
                    document.querySelector('form.logout').submit(); ">Sair</a>

                    <form action="{{route('logout')}}" class="logout" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
            </div>
        </div>
        @endauth
    </nav>
    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    
</body>
</html>
