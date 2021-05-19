@extends('layout.app')
@section('content')
    <section class="container mx-5 shadow ms-5">
        <h2 class="text-center pt-5 my-5 mx-5">Création Caractéristique</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="{{route("caracteristiques.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fas fa-money-bill-wave"> faire un don</option>
                    <option value="fas fa-running"> Conditions physique</option>
                    <option value="fas fa-heart"> Find Love</option>
                    <option value="fas fa-globe-europe"> Marketplace</option>
                    <option value="fas fa-cloud"> Cloud</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Chiffres</label>
                <input type="number" class="form-control" name="chiffres">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            
            <button type="submit" class="btn btn-primary mt-5 mb-3 w-100 text-white"><i class="fs-2 far fa-check-circle"></i></button>
          </form>
    </section>
@endsection

