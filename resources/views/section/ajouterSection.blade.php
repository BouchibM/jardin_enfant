@extends('layouts.sidebar')

@section('main')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Ajouter Section</h4>
            </div>
        </div>
        <form method="POST" action="{{route('section.create')}}">
            @csrf
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom">
                    @error('Nom')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn" style=" background-color: #ff8c00; color:white; margin-top: 20px;"
                    type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection