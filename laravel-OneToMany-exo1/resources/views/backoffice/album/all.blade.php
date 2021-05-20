@extends('layouts.app')

@section('content')
    @include('partials.navbar')
    <section class="container">
        <h1 class="text-center my-5">Albums</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
        <tbody>
            @foreach($albums as $album)
          <tr>
            <th scope="row">{{ $album->id }}</th>
            <td>{{ $album->nom }}</td>
            <td>{{ $album->description }}</td>
            <td>
                <div class="d-flex">
                    <a class="btn text-white mx-1 btn-secondary" href="/albums/{{ $album->id }}/show">show</a>
                    <a href="/albums/{{ $album->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                <form action="{{ route("albums.destroy", $album->id) }}" method="post">
                    @csrf
                    <button class="btn btn-success text-white mx-1" href="">download</button>
                </form>
                <form action="/albums/{{ $album->id }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger text-white mx-1" type="submit">Delete</button>
                </form>
            </div>
            </td>
            @endforeach
        </tbody>
      </table>
</section>
@endsection 