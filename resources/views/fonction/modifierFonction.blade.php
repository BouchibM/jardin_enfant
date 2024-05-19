@extends('layouts.sidebar')

@section('main')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Modifier Fonction</h4>
            </div>
        </div>
        <form method="POST" action="{{ route('fonction.update', $fonction->code) }}">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Code" class="form-label">Code</label>
                    <input type="text" name="Code" class="form-control" id="Code" value="{{ $fonction->code }}"
                        readonly>
                    @error('Code')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom" value="{{ $fonction->nom }}">
                    @error('Nom')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Echelle" class="form-label">Echelle</label>
                    <input type="text" name="Echelle" class="form-control" id="Echelle"
                        value="{{ $fonction->echelle }}">
                    @error('Echelle')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">

                <div class="col-md-6">
                    <label for="Structure" class="form-label">Structure</label>
                    <input type="text" name="Structure" class="form-control" id="Structure"
                        value="{{ $fonction->echelle }}">
                    <!--  get all structures from table structure-->
                    @error('Structure')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button style="background-color: #ffc107; border-color: #ffc107; margin-top: 20px;"
                    type="submit">Modifier</button>
            </div>
        </form>
    </div>
</div>
@endsection