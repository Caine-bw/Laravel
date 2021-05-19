@extends('layout.app')
@section('content')
    <section class="container-fluid px-5 mt-5 mx-5 shadow">
        <h2 class="text-center pt-5 my-4 mx-5 fs-1">Edit galerie</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/galeries/{{ $galerie->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input value="{{ $galerie->nom }}" type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control"  name="image">
              </div>     
            <div class="mb-3">
                <label class="form-label">description</label>
                <input value="{{ $galerie->description }}" type="text" class="form-control py-5"  name="description">
            </div> 
            <button type="submit" class="btn btn-primary w-100 mb-5 mt-5 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection
