@extends('layout.app')
@section('content')
    <section class="container-fluid px-5 mt-5 mx-5 shadow">
        <h2 class="text-center pt-5 my-4 mx-5 fs-1">Create galerie</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("galeries.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label fs-4">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label fs-4">Image</label>
                <input type="file" class="form-control"  name="image">
              </div>
                 
            <div class="mb-3">
                <label class="form-label fs-4">Description</label>
                <input type="text" class="form-control py-5"  name="description">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-5 mt-5 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection
