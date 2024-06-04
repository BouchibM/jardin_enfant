@extends('layouts.sidebar')

@section('main')

<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Ajouter Classe</h4>
            </div>
        </div>
        <form method="POST" action="{{route('classe.create')}}">
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
                    <label for="Section" class="form-label">Section</label>
                    <select class="form-select" name="section_id" id="section_id">
                        <option value="">[ Sélectionnez une section ]</option>
                        @foreach($sections as $section)
                        <option value="{{ $section->id }}">{{ $section->nom }}</option>
                        @endforeach
                    </select>
                    @error('Section')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Jardin" class="form-label">Jardin</label>
                    <select class="form-select" name="jardin_id" id="jardin_id">
                        <option value="">[ Sélectionnez un jardin ]</option>
                        @foreach($jardins as $jardin)
                        <option value="{{ $jardin->id }}">{{ $jardin->nom }}</option>
                        @endforeach
                    </select>
                    @error('Jardin')
                    <div class="error">{{$message}}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn" style=" background-color: #ff8c00; color:white; margin-top: 20px;"
                    type="submit">Ajouter</button>
            </div>
        </form>
    </div>
</div>
@endsection