@extends('layouts.sidebar')

@section('main')
<div class="container-fluid content-inner mt-n5 py-0">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Modifier Region</h4>
            </div>
        </div>
        <form method="POST" action="{{ route('region.update', $region->id) }}">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" class="form-control" id="Nom" value="{{ $region->nom }}">
                    @error('Nom')
                    <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="Emplacement" class="form-label">Emplacement</label>
                <select class="form-select" name="Emplacement" id="Emplacement">
                    <option value="">[ Sélectionnez un Emplacement ]</option>
                    <option value="Nord" {{ $region->emplacement == 'Nord' ? 'selected' : '' }}>Nord</option>
                    <option value="Sud" {{ $region->emplacement == 'Sud' ? 'selected' : '' }}>Sud</option>
                </select>
                @error('Emplacement')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="Statue" class="form-label">Statue</label>
                <select class="form-select" name="Statue" id="Statue">
                    <option value="">[ Sélectionnez un Statue ]</option>
                    <option value="Nord" {{ $region->statue == 'active' ? 'selected' : '' }}>active</option>
                    <option value="Sud" {{ $region->statue == 'inactive' ? 'selected' : '' }}>inactive</option>
                </select>
                @error('Statue')
                <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <button class="btn btn" style=" background-color: #ff8c00; color:white; margin-top: 20px;"
                    type="submit">Modifier</button>
            </div>
        </form>
    </div>
</div>
@endsection