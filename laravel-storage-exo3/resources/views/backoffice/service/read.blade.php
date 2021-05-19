@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5 ms-5 shadow">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title fs-1 text-center border-bottom">Description:</h5>
            <p class="fs-3 mt-3 pt-4">Icone :<i class="text-secondary fas fa-2x {{ $service->icone }}"></i></p>
            <p class="fs-3 pt-2">Description: {{ $service->description }}</p>
            <p class="fs-3 pt-2">Titre: {{ $service->titre }}</p>
          <a href="{{ route("services.index") }}" class="btn btn-primary text-white mt-5 mb-3 w-100"><i class="fas fa-undo"></i></a>
        </div>
      </div>
</div>
@endsection