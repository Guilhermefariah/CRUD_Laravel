@extends('templates.template')

@section('content')
    <div class="m-auto">
        <h1 class="text-center text-white font-bold text-3xl">Visualizar</h1>
        <hr>
    </div>
    <div class="col-8 m-auto">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título</th>
                    <th scope="col">Páginas</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Autor</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
                <tr class="text-white font-bold">
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->pages }}</td>
                    <td>R$ {{ $book->price }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
