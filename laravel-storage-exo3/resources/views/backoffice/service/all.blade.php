@extends('layout.app')
@section('content')

    <div class="container-fluid  mx-5">
        <h1 class=" text-dark text-center my-5">Service</h1>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table mx-5 ">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
   
            <tr>
              <th scope="row" class="fs-2 pt-3">{{ $service->id }}</th>
              <td><a href="/services/{{ $service->id }}"><i class="text-success pt-1 fas fa-3x {{ $service->icone}}"></i></a></td>
              <td>{{ $service->titre }}</td>
              <td>{{ $service->description }}</td>
              <td>
                  <div class="d-flex mt-1">
                    <a href="/services/{{ $service->id }}/edit" class="btn btn-secondary text-white ms-5 mx-1"><i class="fas fa-pencil-alt mx-1"></i></a>
                    <form action="/services/{{ $service->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger text-white ms-1" type="submit"><i class="fas fa-times-circle"></i></button>
                    </form>
                  </div>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div>
          {{ $services->links() }}
      </div>
      <div class="d-flex justify-content-end pb-5 ">
        <a href={{ route("services.create") }} class="btn btn-primary text-light"><i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
@endsection