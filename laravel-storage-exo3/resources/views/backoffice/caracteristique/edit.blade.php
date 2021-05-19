@extends('layout.app')
@section('content')
    <section class="container-fluid mx-5 shadow ">
        <h2 class="text-center pt-5 my-4 mx-5 border-bottom fs-1">Édition Caractéristique</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/caracteristiques/{{ $caracteristique->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">
                    <option value="fas fa-money-bill-wave" {{ $caracteristique->icone === 'fas fa-money-bill-wave' ? 'selected' : '' }}> faire un don</option>
                    <option value="fas fa-running" {{ $caracteristique->icone === 'fas fa-running' ? 'selected' : '' }}> Conditions physique</option>
                    <option value="fas fa-heart" {{ $caracteristique->icone === 'fas fa-heart' ? 'selected' : '' }}> Find Love</option>
                    <option value="fas fa-globe-europe" {{ $caracteristique->icone === 'fas fa-globe-europe' ? 'selected' : '' }}> Marketplace</option>
                    <option value="fas fa-cloud" {{ $caracteristique->icone === 'fas fa-cloud' ? 'selected' : '' }}> Cloud</option>
              </select>

            </div>
            <div class="mb-3">
                <label class="form-label">Chiffres</label>
                <input value="{{ $caracteristique->chiffres }}" type="number" class="form-control" name="chiffres">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input value="{{ $caracteristique->nom }}" type="text" class="form-control" name="nom">
            </div>
            
            <button type="submit" class="btn btn-primary text-white w-100 mb-3 mt-5">Submit</button>
          </form>
    </section>
@endsection


