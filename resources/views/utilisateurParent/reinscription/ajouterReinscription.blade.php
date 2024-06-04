@extends('layouts.sidebarUser')

@section('main')
<div class="container mt-5">
    <h2 class="mb-4">Réinscription</h2>
    @if (!$reinscription)
        <!-- Formulaire de demande de réinscription initiale -->
        <form method="POST" action="{{ route('reinscription.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="enfant" class="form-label">Sélectionnez l'enfant à réinscrire :</label>
                    <select class="form-control" id="enfant" name="enfant" required>
                        <option value="">Sélectionnez un enfant</option>
                        @foreach($enfants as $enfant)
                            <option value="{{ $enfant->id }}" data-region="{{ $enfant->region->nom ?? 'Non spécifiée' }}" data-jardin="{{ $enfant->jardin->nom ?? 'Non spécifié' }}" data-section="{{ $enfant->section->nom ?? 'Non spécifiée' }}">
                                {{ $enfant->nom }} {{ $enfant->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="region_actuelle" class="form-label">Région Actuelle</label>
                    <input type="text" class="form-control" id="region_actuelle" name="region_actuelle" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="jardin_actuel" class="form-label">Jardin Actuel</label>
                    <input type="text" class="form-control" id="jardin_actuel" name="jardin_actuel" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="section_actuelle" class="form-label">Section Actuelle</label>
                    <input type="text" class="form-control" id="section_actuelle" name="section_actuelle" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="pay_slip" class="form-label">Joindre votre dernière fiche de paie :</label>
                    <input type="file" class="form-control" id="pay_slip" name="pay_slip" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    @elseif ($reinscription->status == 'approved')
        <!-- Formulaire de soumission de paiement -->
        <p>Montant à payer : {{ $amount }} DA</p>
        <form method="POST" action="{{ route('reinscription.update', $reinscription->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="transaction_number" class="form-label">Numéro de Transaction :</label>
                    <input type="text" class="form-control" id="transaction_number" name="transaction_number" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="payment_slip" class="form-label">Joindre le Bordereau de Paiement :</label>
                    <input type="file" class="form-control" id="payment_slip" name="payment_slip" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    @else
        <p>Votre demande de réinscription est en cours de traitement. Veuillez attendre l'approbation du gestionnaire.</p>
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#enfant').on('change', function() {
            var selectedOption = $(this).find('option:selected');
            $('#region_actuelle').val(selectedOption.data('region'));
            $('#jardin_actuel').val(selectedOption.data('jardin'));
            $('#section_actuelle').val(selectedOption.data('section'));
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
