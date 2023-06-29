@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastro de Produtos</h1> <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('prods/create')}}"><button class="btn btn-success"> Novo Cadastro </button></a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prod as $prods)
                <tr>
                    <th scope="row">{{$prods -> id}}</th>
                    <td>{{$prods -> name}}</td>
                    <td>{{$prods -> preco}}</td>
                    <td>{{$prods -> descricao}}</td>
                    <td>
                        <a href="{{url("prods/$prods->id")}}"> <button class="btn btn-dark">Visualizar</button></a>
                        <a href="{{url("prods/$prods->id/edit")}}"> <button class="btn btn-primary">Editar</button></a>
                        <a href="{{url("prods/$prods->id")}}" class="js-del"> <button class="btn btn-danger">Deletar</button></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
