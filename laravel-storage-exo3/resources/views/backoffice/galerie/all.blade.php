@extends('layout.app')
@section('content')

    <div class="container shadow mx-5">
        <h1 class="text-center my-5 border-bottom" >Galeries</h1>
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
            <th scope="col">Description</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($galeries as $galerie)
            
            <tr>
              <th class="fs-4" scope="row">{{ $galerie->id }}</th>
              <td ><a href="/galeries/{{ $galerie->id }}">{{ $galerie->nom}}</a></td>
              <td class="fs-4"><img style="width : 300px" src={{ asset('img/'. $galerie->image) }} alt=""></td>
              <td class="fs-4">{{ $galerie->description }}</td>
              
              <td>
                  <div class="d-flex ">
                      <a href="/galeries/{{ $galerie->id }}/edit" class="btn btn-secondary mx-1 mt-2 text-white"><i class="fas fa-pencil-alt"></i></a>
                    <form action="/galeries/{{ $galerie->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger text-white mx-1 mt-2" type="submit"><i class="fas fa-times-circle"></i></button>
                    </form>
                    <form action="/galeries/{{ $galerie->id }}/download" method="POST">
                        @csrf
                        <button class="btn text-secondary btn-warning mx-1 mt-2" type="submit"><i class="fas fa-arrow-circle-down"></i></button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $galeries->links() }}
      </div>
      <div class="d-flex justify-content-end pb-3 pt-5 ">
        <a href={{ route("galeries.create") }} class="btn btn-primary text-white"><i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
@endsection