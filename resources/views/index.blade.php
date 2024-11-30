@extends('templates.template')

@section('content')
    <div>
      <link href="#">
        <button class="btn btn-success">Cadastrar</button>
      </link>
    </div>
    
    <div class="col-8 m-auto">
        <table class="table te">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              @foreach($book as $books)
              @php
                  $user=$books->find($books->id)->relUsers;
              @endphp
              <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$books->title}}</td>
                <td>{{$user->name}}</td>
                <td>{{$books->price}}</td>
                <td>
                  <a href="#">
                    <button class="btn btn-dark">Visualizar</button>
                  </a>

                  <a href="#">
                    <button class="btn btn-success">Editar</button>
                  </a>

                  <a href="#">
                    <button class="btn btn-danger">Deletar</button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection