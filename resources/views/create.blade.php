@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($prod)) Editar @else Cadastrar @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}} <br>
                @endforeach
            </div>
        @endif

        @if(isset($prod))
            <form name="formEdit" id="formEdit" method="post" action="{{url("prods/$prod->id")}}">
            @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('prods')}}">
        @endif


            @csrf
            <input class="form-control mt-2 mb-2" type="text" name="name" id="name" placeholder="Nome" value="{{$prod->name ?? ''}}" required>
            <input class="form-control mt-2 mb-2" type="text" name="preco" id="preco" placeholder="Preço" value="{{$prod->preco ?? ''}}" required>
            <input class="form-control mt-2 mb-2" type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{$prod->descricao ?? ''}}" required>
            <input class="btn btn-primary mt-2 mb-2" type="submit" value=@if(isset($prod)) Editar @else Cadastrar @endif>
        </form>
    </div>
@endsection
