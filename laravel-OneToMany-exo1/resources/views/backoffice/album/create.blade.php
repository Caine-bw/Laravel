@extends('layout.app')

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1 class="text-center my-5">Create User</h1>
        <form>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection