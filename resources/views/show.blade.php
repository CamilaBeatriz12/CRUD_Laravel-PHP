@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        Nome: {{$prod->name}} <br>
        Preço: {{$prod->preco}} <br>
        Descrição: {{$prod->descricao}} <br>
    </div>
@endsection
