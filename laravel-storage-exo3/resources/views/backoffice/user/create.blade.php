@extends('layout.app')
@section('content')
    <section class="container-fluid mx-5 shadow">
        <h2 class="text-center pt-5 my-4 mx-5 fs-1">Create user</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{ route("users.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input type="number" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control"  name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control"  name="mdp">
            </div>
            <div class="mb-3">
              <label class="form-label">Photo de profil</label>
              <input type="file" class="form-control"  name="pdp">
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mb-3 mt-5 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection
