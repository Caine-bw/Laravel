@extends('layout.app')
@section('content')
    <section class="container-fluid px-5 mt-5 mx-5 shadow">
        <h2 class="text-center pt-5 my-4 mx-5 fs-1">Create portfolio</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("portfolios.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" class="form-control"  name="image">
              </div>
              
            <div class="mb-3">
                <label class="form-label ">categorie</label>
                <select name="categorie" class="w-100 px-3 py-2" id="">
                    <option value="HTML/CSS">HTML/CSS</option>
                    <option value="Javascript">Javascript</option>
                    <option value="React/VueJS">React/VueJS</option>
                    <option value="Laravel/PHP">Laravel/PHP</option>
                </select>
            </div>     
            <div class="mb-5">
                <label class="form-label">Description</label>
                <input type="text" class="form-control py-5"  name="description">
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-5 mt-5 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection
