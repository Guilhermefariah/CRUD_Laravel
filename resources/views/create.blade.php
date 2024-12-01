@extends('templates.template')

@section('content')
    <div class="m-auto">
        <h1 class="text-center text-white font-bold text-3xl">Cadastrar</h1>
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

        <form name="formCard" id="formCard" action="{{ url('books') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título"
                    required>
            </div>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="#">Autor</option>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="pages">Páginas</label>
                <input type="number" class="form-control" id="pages" name="pages"
                    placeholder="Insira o número de páginas" required>
            </div>
            <div class="form-group">
                <label for="price">Preço</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Insira o preço"
                    required>
            </div>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </form>
    </div>
@endsection
