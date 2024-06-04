@extends('layouts.sidebarUser')

@section('main')
<div class="container-fluid content-inner py-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Demande de Désinscription</h4>
            </div>
        </div>

            <div class="card-body">
                <div class="row">
                    <!-- Select Child Dropdown -->
                    <div class="col-md-6 mb-3">
                        <label for="child_id" class="form-label">Sélectionner l'enfant</label>
                        <select class="form-select" name="child_id" id="child_id">
                            <option value="">[ Sélectionnez un enfant ]</option>
                    </div>

                    <!-- Motif Input -->
                    <div class="col-md-6 mb-3">
                        <label for="motif" class="form-label">Motif</label>
                        <input type="text" name="motif" class="form-control" id="motif" placeholder="Entrez le motif de la désinscription">
                        @error('motif')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Reason for Unsubscription -->
                    <div class="col-md-12 mb-3">
                        <label for="raison" class="form-label">Raison détaillée</label>
                        <textarea class="form-control" name="raison" id="raison" rows="3" placeholder="Décrivez la raison détaillée de la désinscription"></textarea>
                        @error('raison')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-warning" type="submit">Soumettre la demande</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
