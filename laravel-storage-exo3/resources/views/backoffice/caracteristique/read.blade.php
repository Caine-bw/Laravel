@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5 ms-5 shadow">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
          <h5 class="card-title">Caracteristique</h5>
            <p class="fs-4">Icone : <i class="text-success fas ms-5 fa-3x {{ $caracteristique->icone }}"></i></p>
            <p class="fs-4">Chiffres : {{ $caracteristique->chiffres }}</p>
            <p class="fs-4">Nom : {{ $caracteristique->nom }}</p>
          <a href="{{ route("caracteristiques.index") }}" class="btn btn-primary text-white mt-5 mb-3 w-100"><i class="fas fa-undo"></i></a>
        </div>
      </div>
</div>
    
@endsection