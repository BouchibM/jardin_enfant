@extends('layouts.sidebargestionnaire')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Gestion des Inscriptions</h4>
                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="table-responsive border-bottom my-3">
                            <table id="datatable" class="table table-striped dataTable" data-toggle="data-table" aria-describedby="datatable_info">
                                <thead>
                                    <tr>
                                        <th>Date de la Demande</th>
                                        <th>Date de Validation</th>
                                        <th>Statut</th>
                                        <th>Motif</th>
                                        <th>Nom de l'Enfant</th>
                                        <th>Prénom de l'Enfant</th>
                                        <th>Date de Naissance</th>
                                        <th>Groupe Sanguin</th>
                                        <th>Adresse Domicile</th>
                                        <th>Région Souhaitée</th>
                                        <th>Jardin Souhaité</th>
                                        <th>Nom du Parent</th>
                                        <th>Prénom du Parent</th>
                                        <th>Profession du Parent</th>
                                        <th>Questions</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($inscriptions as $inscription)
                                    <tr>
                                        <td>{{ $inscription->created_at }}</td>
                                        <td>{{ $inscription->updated_at }}</td>
                                        <td>{{ $inscription->status }}</td>
                                        <td>{{ $inscription->motif_rejet ?? 'N/A' }}</td>
                                        <td>{{ $inscription->enfant->nom }}</td>
                                        <td>{{ $inscription->enfant->prenom }}</td>
                                        <td>{{ $inscription->enfant->date_naissance }}</td>
                                        <td>{{ $inscription->enfant->groupe_sanguin }}</td>
                                        <td>{{ $inscription->enfant->adresse_domicile }}</td>
                                        <td>{{ $inscription->enfant->region->nom }}</td>
                                        <td>{{ $inscription->enfant->jardin->nom }}</td>
                                        <td>{{ $inscription->enfant->parent->nom }}</td>
                                        <td>{{ $inscription->enfant->parent->prenom }}</td>
                                        <td>{{ $inscription->enfant->parent->profession }}</td>
                                        <td>
                                            <ul>
                                                <li>Age Marche: {{ $inscription->enfant->questions->age_marche }}</li>
                                                <li>Age Propre Jour: {{ $inscription->enfant->questions->age_propre_jour }}</li>
                                                <li>Age Propre Nuit: {{ $inscription->enfant->questions->age_propre_nuit }}</li>
                                                <li>Age Parle: {{ $inscription->enfant->questions->age_parle }}</li>
                                                <li>Premier Mot: {{ $inscription->enfant->questions->premier_mot }}</li>
                                                <li>Conditions: {{ $inscription->enfant->questions->conditions }}</li>
                                                <li>Collectivité Avant: {{ $inscription->enfant->questions->collectivite_avant }}</li>
                                                <li>Maladies: {{ $inscription->enfant->questions->maladies }}</li>
                                                <li>Opérations: {{ $inscription->enfant->questions->operations }}</li>
                                                <li>Nombre Frères Soeurs: {{ $inscription->enfant->questions->nombre_freres_soeurs }}</li>
                                                <li>Condition Habitation: {{ $inscription->enfant->questions->condition_habitation }}</li>
                                                <li>Chambre Individuelle: {{ $inscription->enfant->questions->chambre_individuelle }}</li>
                                                <li>Partage Chambre Avec: {{ $inscription->enfant->questions->partage_chambre_avec }}</li>
                                                <li>Mange Bien: {{ $inscription->enfant->questions->mange_bien }}</li>
                                                <li>Dort Bien: {{ $inscription->enfant->questions->dort_bien }}</li>
                                                <li>Activités Maison: {{ $inscription->enfant->questions->activites_maison }}</li>
                                                <li>Volontaire: {{ $inscription->enfant->questions->volontaire }}</li>
                                                <li>Turbulent: {{ $inscription->enfant->questions->turbulent }}</li>
                                                <li>Observations: {{ $inscription->enfant->questions->observations }}</li>
                                            </ul>
                                        </td>
                                        <td>
                                            @if($inscription->status == 'pending')
                                                <form action="{{ route('gestionnaire.inscriptions.accept', $inscription->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Accepter</button>
                                                </form>
                                                <form action="{{ route('gestionnaire.inscriptions.reject', $inscription->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Rejeter</button>
                                                    <input type="text" name="motif_rejet" placeholder="Motif de rejet" required>
                                                </form>
                                            @else
                                                <button class="btn btn-secondary" disabled>{{ $inscription->status == 'accepted' ? 'Acceptée' : 'Rejetée' }}</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date de la Demande</th>
                                        <th>Date de Validation</th>
                                        <th>Statut</th>
                                        <th>Motif</th>
                                        <th>Nom de l'Enfant</th>
                                        <th>Prénom de l'Enfant</th>
                                        <th>Date de Naissance</th>
                                        <th>Groupe Sanguin</th>
                                        <th>Adresse Domicile</th>
                                        <th>Région Souhaitée</th>
                                        <th>Jardin Souhaité</th>
                                        <th>Nom du Parent</th>
                                        <th>Prénom du Parent</th>
                                        <th>Profession du Parent</th>
                                        <th>Questions</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
