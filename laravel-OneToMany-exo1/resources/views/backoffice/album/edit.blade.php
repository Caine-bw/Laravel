@extends('layout.app')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center my-5">Update User</h1>
        <form>
            @csrf
            @method("put")
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $album->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="" cols="30" rows="10" class="form-control"{{ $album->description }}></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection