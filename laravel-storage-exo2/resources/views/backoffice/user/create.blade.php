@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create photo</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action={{ "users.store" }} enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <div class="mb-3">
                    <label class="form-label">Prenom</label>
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
                    <label class="form-label">password</label>
                    <input type="password" class="form-control"  name="password">
                  </div>
              <label class="form-label">Photo de Profil</label>
              <input type="file" class="form-control"  name="pdp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection