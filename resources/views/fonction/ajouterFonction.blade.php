@extends('layouts.sidebar')

@section('main')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Ajouter Fonction</h4>
            </div>
        </div>
        <form method="POST" action="{{route('fonction.create')}}">
            @csrf
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Code" class="form-label">Code</label>
                    <input type="text" name="Code" class="form-control" id="Code">
                    @error('Code')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom">
                    @error('Nom')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Echelle" class="form-label">Echelle</label>
                    <input type="text" name="Echelle" class="form-control" id="Echelle">
                    @error('Echelle')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Structure" class="form-label">Structure</label>
                    <input type="text" name="Structure" class="form-control" id="Structure">
                    @error('Structure')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button style="background-color: #ffc107; border-color: #ffc107;
                margin-top: 20px;" type="submit">Enregistrer</button>
            </div>
        </form>
    </div>
</div>
@endsection