@extends("layout")
@section("conteudo")
    @include("_produtos", [ 'lista' => $lista ])
@endsection