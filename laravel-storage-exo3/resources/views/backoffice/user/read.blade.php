@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5 shadow">
    <div class="card" style="width: 25rem;">
        <img src="{{ asset("img/" . $user->pdp) }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">User : {{$user->id}}</h5>
             <p>nom : {{ $user->nom }}</p>
            <p>prenom:{{ $user->prenom }}</p>
            <p>age:{{ $user->age }}</p>
            <p>email:{{ $user->email }}</p>
            {{-- <p>password:{{ $user->password}}</p> --}}
          <a href="{{ route("users.index") }}" class="btn btn-primary text-white mt-5 mb-3 w-100"><i class="fas fa-undo"></i></a>
        </div>
      </div>
</div>
@endsection