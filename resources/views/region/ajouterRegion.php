@extends('layouts.sidebar')
@section('main')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Ajouter Utilisateur</h4>
            </div>
        </div>
        <form method="post" action="{{route('region.create')}}">
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
            <div class="col-md-6">
                <label for="Emplacement" class="form-label">Emplacement</label>
                <select class="form-select" name="Emplacement" id="Emplacement">
                    <option value="">[ Sélectionnez un Emplacement ]</option>
                    <option value="">Nord</option>
                    <option value="">Sud</option>
                </select>
                @error('Emplacement')
                <div class="error">{{$message}}</div>
                @enderror


                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection