@extends('templates.template')

@section('content')
    <div class="m-auto">
        <h1 class="text-center text-white font-bold text-3xl">Visualizar</h1>
        <hr>
    </div>
    
    <div class="col-8 m-auto">
        <table class="table table-hover text-white">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">Preço</th>
                </tr>
            </thead>

            <tbody>
                <tr class="text-white">
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>R$ {{ $book->price }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
