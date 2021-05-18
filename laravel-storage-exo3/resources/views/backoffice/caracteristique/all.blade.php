@extends('layout.app')
@section('content')

    <div class="container">
        <h1 class="text-danger text-center my-5" >Caracteristique</h1>
        <a href={{ route("caracteristiques.create") }} class="btn btn-success "> Créer</a>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Chiffres</th>
            <th scope="col">Nom</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($caracteristiques as $caracteristique)
   
            <tr>
              <th scope="row">{{ $caracteristique->id }}</th>
              <td><a href="/caracteristiques/{{ $caracteristique->id }}"><i class="fas fa-2x {{ $caracteristique->icone}}"></i></a></td>
              <td>{{ $caracteristique->chiffres }}</td>
              <td>{{ $caracteristique->nom }}</td>
              <td>
                  <div class="d-flex ">
                    <a href="/caracteristiques/{{ $caracteristique->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                    <form action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $caracteristiques->links() }}
      </div>
    </div>
@endsection