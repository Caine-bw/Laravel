@extends('layout.app')
@section('content')

    <div class="container bg-light shadow mt-5">
        <h1 class="text-primary text-center my-5" >Portfolios</h1>
        <a href={{ route("portfolios.create") }} class="btn btn-success "> Créer</a>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Image</th>
            <th scope="col">categorie</th>
            <th scope="col">description</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($portfolios as $portfolio)
            
            <tr>
              <th scope="row">{{ $portfolio->id }}</th>
              <td><a href="/portfolios/{{ $portfolio->id }}">{{ $portfolio->nom}}</a></td>
              <td><img style="width : 200px" src={{ asset('img/'. $portfolio->image) }} alt=""></td>
              <td>{{ $portfolio->categorie }}</td>
              <td>{{ $portfolio->description }}</td>
              
              <td>
                  <div class="d-flex ">
                      <a href="/portfolios/{{ $portfolio->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                    <form action="/portfolios/{{ $portfolio->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                    </form>
                    <form action="/portfolios/{{ $portfolio->id }}/download" method="POST">
                        @csrf
                        <button class="btn btn-warning mx-1" type="submit">Download</button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $portfolios->links() }}
      </div>
    </div>
@endsection