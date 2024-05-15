@extends('layouts.sidebar')

@section('main')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Ajouter Region</h4>
            </div>
        </div>
        <form method="POST" action="{{route('region.create')}}">
            @csrf
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" name="Status" id="Status">
                        <option value="">[ Sélectionnez un Status ]</option>
                        @foreach($regions as $region)
                        <option value="{{ $region->status }}">{{ $region->status }}</option>
                        @endforeach
                    </select>
                    @error('Status')
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
                    <label for="Date_Ouverture" class="form-label">Date Ouverture</label>
                    <input type="text" name="Date_Ouverture" class="form-control" id="Date_Ouverture">
                    @error('Date_Ouverture')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Adresse" class="form-label">Adresse</label>
                    <input type="text" name="Adresse" class="form-control" id="Adresse">
                    @error('Adresse')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="num_agrement" class="form-label">Num agrement</label>
                    <input type="text" name="num_agrement" class="form-control" id="num_agrement">
                    @error('num_agrement')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="nature_juridique" class="form-label">Nature juridique</label>
                    <input type="text" name="nature_juridique" class="form-control" id="nature_juridique"
                        value="Sonatrach">
                    @error('nature_juridique')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="poste_amenage" class="form-label">Poste amenage</label>
                    <input type="text" name="poste_amenage" class="form-control" id="poste_amenage">
                    @error('poste_amenage')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Capacite" class="form-label">Capacite</label>
                    <input type="text" name="Capacite" class="form-control" id="Capacite">
                    @error('Capacite')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Status" class="form-label">Status</label>
                    <select class="form-select" name="Status" id="Status">
                        <option value="">[ Sélectionnez un Status ]</option>
                        <option value="Nord">Ouvert</option>
                        <option value="Sud">Ferme</option>
                    </select>
                    @error('Status')
                    <div class="error">{{$message}}</div>
                    @enderror

                </div>
            </div>
            <div class="col-12">
                <button style="background-color: #ffc107; border-color: #ffc107;
                margin-top: 20px;" type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection