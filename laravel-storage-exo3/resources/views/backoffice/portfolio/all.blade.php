@extends('layout.app')
@section('content')

    <div class="container shadow mx-5">
        <h1 class="text-center my-5 border-bottom" >Portfolios</h1>
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
            <th scope="col">Categorie</th>
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
                      <a href="/portfolios/{{ $portfolio->id }}/edit" class="btn btn-primary mx-1 mt-2 text-white"><i class="fas fa-pencil-alt"></i></a>
                    <form action="/portfolios/{{ $portfolio->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger text-white mx-1 mt-2" type="submit"><i class="fas fa-times-circle"></i></button>
                    </form>
                    <form action="/portfolios/{{ $portfolio->id }}/download" method="POST">
                        @csrf
                        <button class="btn btn-warning text-secondary mx-1 mt-2" type="submit"><i class="fas fa-arrow-circle-down"></i></button>
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
      <div class="d-flex justify-content-end pb-3 pt-5 ">
        <a href={{ route("portfolios.create") }} class="btn btn-primary text-white"><i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
@endsection