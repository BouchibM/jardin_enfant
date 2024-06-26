@extends('layouts.sidebar')

@section('main')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Modifier Section</h4>
            </div>
        </div>
        <form method="POST" action="{{ route('section.update', $section->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Nom" class="form-label">ID</label>
                    <input type="text" name="ID" class="form-control" id="ID" value="{{ $section->id }}" readonly>
                    @error('ID')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom" value="{{ $section->nom }}">
                    @error('Nom')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Capacite" class="form-label">Capacite</label>
                    <input type="number" name="Capacite" class="form-control" id="Capacite"
                        value="{{ $section->capacite }}">
                    @error('Nom')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>


            <div class="col-12">
                <button class="btn btn" style=" background-color: #ff8c00; color:white; margin-top: 20px;"
                    type="submit">Modifier</button>
            </div>
        </form>
    </div>
</div>
@endsection