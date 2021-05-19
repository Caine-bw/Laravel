@extends('layout.app')
@section('content')

    <div class="container shadow mx-5">
        <h1 class="text-center my-5 border-bottom" >Caracteristique</h1>
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
              <th class="fs-4" scope="row">{{ $caracteristique->id }}</th>
              <td><a href="/caracteristiques/{{ $caracteristique->id }}"><i class="fas fa-2x {{ $caracteristique->icone}}"></i></a></td>
              <td>{{ $caracteristique->chiffres }}</td>
              <td>{{ $caracteristique->nom }}</td>
              <td>
                  <div class="d-flex ">
                    <a href="/caracteristiques/{{ $caracteristique->id }}/edit" class="btn btn-secondary mx-1 mt-1 text-white"><i class="fas fa-pencil-alt"></i></a>
                    <form action="/caracteristiques/{{ $caracteristique->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger text-white mx-1 mt-1" type="submit"><i class="fas fa-times-circle"></i></button>
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
      <div class="d-flex justify-content-end pb-3 pt-5 ">
        <a href={{ route("caracteristiques.create") }} class="btn btn-primary text-white"><i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
@endsection