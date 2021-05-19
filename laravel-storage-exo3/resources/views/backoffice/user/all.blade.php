@extends('layout/app')
@section('content')
    <div class="container-fluid bg-light shadow mt-5  justify-content-center">
        <h1 class="text-pirmary"><i class="fas fa-user"></i> User</h1>
    @if (session('message'))
        <div class="alert alert-succes">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">Photo de profil</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <th scope="row">{{ $user->id }}</th>
            <td><a href="/users/{{ $user->id }}">{{ $user->nom}}</a></td>
            <td>{{ $user->prenom }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->mdp }}</td>
            <td><img style="height : 200px" style="width : 300px" src={{ asset('img/'. $user->pdp) }} alt=""></td>
            <td>
                <div class="flex-column text-center mt-1">
                    <a href="/users/{{ $user->id }}/edit" class="btn btn-secondary mx-1 mt-2 text-white"><i class="fas fa-pencil-alt"></i> Edit</a>
                    <form action="/users/{{ $user->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger text-white mx-1 mt-2" type="submit"><i class="fas fa-times-circle"></i> Delete</button>
                    </form>
                    <form action="/users/{{ $user->id }}/download" method="POST">
                        @csrf
                        <button class="btn btn-warning text-secondary mx-1 mt-2" type="submit"><i class="fas fa-arrow-circle-down"></i> Download</button>
                    </form>
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div>
          {{ $users->links()}}
      </div>
      <div class="d-flex justify-content-end pb-5 "><a href={{ route("users.create") }} class="btn btn-primary text-light"><i class="fas fa-plus-circle"></i></a></div>
    </div>
@endsection