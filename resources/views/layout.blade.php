<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casarini Shop - Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    @yield("scriptjs")
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Casarini Shop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">HOME</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
                @if(!Auth::user())
                <a class="nav-link" href="{{ route('logar') }}">Logar</a>
                @else
                <a class="nav-link" href="{{ route('compra_historico') }}">Minhas compras</a>
                <a class="nav-link" href="{{ route('logar') }}">Logout</a>
                @endif
            </div>
        </div>
        <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            @if(Auth::user())
            <div class="col-12">
                <p class="text-right">Seja bem vindo, {{ Auth::user()->nome }}, <a href="{{ route('sair') }}">sair</a></p>
            </div>
            @endif

            @if($message = Session::get("err"))
            <div class="col-12">
                <div class="alert alert-danger">{{ $message }}</div>
            </div>
            @endif

            @if($message = Session::get("ok"))
            <div class="col-12">
                <div class="alert alert-sucess">{{ $message }}</div>
            </div>
            @endif

            <!--Nesta DIV teremos uma area que os outros arquivos irão adicionar conteúdo -->
            @yield("conteudo")
        </div>
    </div>

    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
-->
</body>

</html>