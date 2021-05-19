@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5 shadow ms-5">
    <div class="card" style="width: 25rem;">
        <img style="width : 450px" style="height : 400px" src={{ asset('img/'. $galerie->image) }} alt="">
        <div class="card-body">
          <h5 class="card-title fs-2 pb-1">Galerie</h5>
          <p class="fs-5">Nom : {{ $galerie->nom }}</p>
          <p class="fs-5">Description: {{ $galerie->description }}</p>
          <a href="{{ route("galeries.index") }}" class="btn btn-primary text-white mt-5 mb-3 w-100"><i class="fas fa-undo"></i></a>
        </div>
      </div>
</div>
@endsection