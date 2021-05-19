@extends('layout.app')

@section('content')
<div class="ms-5 mx-5 d-flex justify-content-center mt-5 shadow">
    <div class="card" style="width: 25rem;">
        <img class="img-fluid" style="height : 350px" src={{ asset('img/'. $portfolio->image) }} alt="">        <div class="card-body">
          <h5 class="card-title"> portfolio</h5>
            <p>Nom : {{ $portfolio->nom }}</p>
            <p>Categorie: {{ $portfolio->categorie }}</p>
            <p>Description: {{ $portfolio->description }}</p>
          <a href="{{ route("portfolios.index") }}" class="btn btn-primary text-white mt-5 mb-3 w-100"><i class="fas fa-undo"></i></a>
        </div>
      </div>
</div>
@endsection