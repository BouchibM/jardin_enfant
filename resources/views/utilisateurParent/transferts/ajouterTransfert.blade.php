@extends('layouts.sidebarUser')

@section('main')
<div class="container mt-5">
    <h2 class="mb-4">Formulaire de Transfert d'Enfant</h2>
    <form method="POST" action="{{ route('transfert.create') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="child_id" class="form-label">Sélectionner l'enfant</label>
                <select class="form-select" name="child_id" id="child_id" required>
                    <option value="">[ Sélectionnez un enfant ]</option>
                    @foreach($enfants as $enfant)
                        <option value="{{ $enfant->id }}">{{ $enfant->nom }} {{ $enfant->prenom }}</option>
                    @endforeach
                </select>
                @error('child_id')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="motif" class="form-label">Motif</label>
                <input type="text" name="motif" class="form-control" id="motif" placeholder="Entrez le motif de transfert" required>
                @error('motif')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12 mb-3">
                <label for="raison" class="form-label">Raison du transfert</label>
                <textarea class="form-control" name="raison" id="raison" rows="3" required></textarea>
                @error('raison')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="region" class="form-label">Région souhaitée</label>
                <select class="form-select" name="region" id="region" required>
                    <option value="">[ Choisissez une région ]</option>
                    @foreach($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->nom }}</option>
                    @endforeach
                </select>
                @error('region')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="jardin" class="form-label">Jardin souhaité</label>
                <select class="form-select" name="jardin" id="jardin" required>
                    <option value="">[ Sélectionnez un jardin ]</option>
                </select>
                @error('jardin')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning" type="submit">Soumettre le formulaire</button>
        </div>
    </form>
</div>

<script>
    document.getElementById('region').addEventListener('change', function() {
        var regionId = this.value;
        var jardinSelect = document.getElementById('jardin');
        jardinSelect.innerHTML = '<option value="">[ Sélectionnez un jardin ]</option>';
        
        if (regionId) {
            fetch(`/jardins/${regionId}`)
                .then(response => response.json())
                .then(data => {
                    data.forEach(jardin => {
                        var option = document.createElement('option');
                        option.value = jardin.id;
                        option.textContent = jardin.nom;
                        jardinSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching jardins:', error));
        }
    });
</script>
@endsection
