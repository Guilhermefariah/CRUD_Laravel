@extends('templates.template')

@section('content')
    <div class="m-auto">
        <h1 class="text-center text-white font-bold text-3xl">
            @if (isset($book))
                Editar
            @else
                Cadastrar
            @endif 
        </h1>
        <hr>
    </div>

    <div class="col-8 m-auto text-white" style="font-size: 1.5em">

        @if (isset($erros) && count($erros) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($erros->all() as $erro)
                    {{ $erro }}
                @endforeach
            </div>
        @endif

        @if (isset($book))
            <form name="formEdit" id="formEdit" action="{{ url("books/$book->id") }}" method="POST">
            @method('PUT')
        @else
            <form name="formCard" id="formCard" action="{{ url("books") }}" method="POST">
        @endif
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título" value="{{$book->title ?? ''}}" required>
            </div>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? ''}}</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="pages">Páginas</label>
                <input type="number" class="form-control" id="pages" name="pages" placeholder="Insira o número de páginas" value="{{$book->pages ?? ''}}" required>
            </div>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Insira o preço" value="{{$book->price ?? ''}}" required>
            </div>
            <button type="submit" class="btn btn-dark">@if (isset($book)) Editar @else Cadastrar @endif</button>
        </form>
    </div>
@endsection
