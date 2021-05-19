@extends('layout.app')
@section('content')
    <section class="container mx-5 shadow">
        <h2 class="text-center pt-5 my-5 mx-5">Création Service</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("services.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fa-plane"> Voyage</option>
                    <option value="fa-utensils"> Restaurants</option>
                    <option value="fa-cocktail"> Nightclub</option>
                    <option value="fa-hotel"> Hotel</option>
                    <option value="fa-hat-cowboy">  Loisirs</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            
            <button type="submit" class="btn btn-primary mt-5 mb-3 w-100 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection

