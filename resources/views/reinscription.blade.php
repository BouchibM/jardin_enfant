{{-- resources/views/reinscription.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Demande de Réinscription</h2>
    <form id="reinscriptionForm" action="{{ route('reinscription.submit') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Étape 1: Authentification et Sélection des Enfants -->
        <div id="step1" class="form-step card mb-4">
            <div class="card-header">
                <h3>Étape 1: Sélection des Enfants</h3>
            </div>
            <div class="card-body">
                @foreach($children as $child)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="children[]" value="{{ $child->id }}" id="child{{ $child->id }}">
                    <label class="form-check-label" for="child{{ $child->id }}">
                        {{ $child->Prenom }} {{ $child->Nom }}
                    </label>
                </div>
                @endforeach
                <button type="button" class="btn btn-primary mt-3" onclick="nextStep()">Suivant</button>
            </div>
        </div>

        <!-- Étape 2: Téléchargement de la dernière fiche de paie -->
        <div id="step2" class="form-step card mb-4" style="display: none;">
            <div class="card-header">
                <h3>Étape 2: Joindre la dernière fiche de paie</h3>
            </div>
            <div class="card-body">
                <input type="file" name="pay_slip" required onchange="calculatePayment()">
                <div id="displayAmount" style="margin-top: 20px;"></div>
                <button type="button" class="btn btn-primary mt-3" onclick="nextStep()">Suivant</button>
            </div>
        </div>

        <!-- Étape 3: Paiement et Confirmation -->
        <div id="step3" class="form-step card mb-4" style="display: none;">
            <div class="card-header">
                <h3>Étape 3: Paiement et Téléchargement de l'Ordre de Paiement</h3>
            </div>
            <div class="card-body">
                <label for="payment_proof">Télécharger l'ordre de paiement :</label>
                <input type="file" name="payment_proof" required><br><br>
                <label for="transaction_number">Numéro de Transaction :</label>
                <input type="text" name="transaction_number" required>
                <button type="button" class="btn btn-primary" onclick="nextStep()">Suivant</button>
            </div>
        </div>

        <!-- Étape 4: Confirmation -->
        <div id="step4" class="form-step card mb-4" style="display: none;">
            <div class="card-header">
                <h3>Étape 4: Confirmation</h3>
            </div>
            <div class="card-body">
                <button type="submit" class="btn btn-success">Confirmer la Réinscription</button>
            </div>
        </div>
    </form>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    window.calculatePayment = function() {
        let children = document.querySelectorAll('input[name="children[]"]:checked').length;
        let basePrice = 18000;
        let totalAmount = 0;

        switch(children) {
            case 1:
                totalAmount = basePrice;
                break;
            case 2:
                totalAmount = basePrice + (basePrice * 0.5); // 50% discount for the second child
                break;
            case 3:
                totalAmount = basePrice + (basePrice * 0.5) + (basePrice * 0.75); // 50% for the second, 25% for the third
                break;
            default:
                totalAmount = basePrice * children; // Full price for more than three children without specific discount
                break;
        }
        
        document.getElementById('displayAmount').innerText = 'Montant à Payer: ' + totalAmount + ' DA';
    };

    window.nextStep = function() {
        let currentStep = document.querySelector('.form-step:not([style*="display: none"])');
        currentStep.style.display = 'none';
        if (currentStep.nextElementSibling) {
            currentStep.nextElementSibling.style.display = 'block';
        }
    };
});
</script>
