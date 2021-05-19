@extends('layout.app')
@section('content')
    <section class="container-fluid mx-5 shadow">
        <h2 class="text-center pt-5 my-4 mx-5 border-bottom fs-1">Edit User : {{$user->nom}}</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/users/{{($user->id) }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input value="{{ $user->nom }}" type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input value="{{ $user->prenom }}" type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input value="{{ $user->age }}" type="number" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input value="{{ $user->email }}" type="text" class="form-control"  name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input value="{{ $user->mdp }}" type="password" class="form-control"  name="mdp">
            </div>
            <div class="mb-3">
              <label class="form-label">Photo de profil</label>
              <input value="{{ $user->pdp }}" type="file" class="form-control"  name="pdp">
            </div>
            
            <button type="submit" class="btn btn-primary text-white w-100 mb-3 mt-5">Submit</button>
          </form>
    </section>
@endsection
