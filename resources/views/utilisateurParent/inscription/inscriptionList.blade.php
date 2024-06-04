@extends('layouts.sidebarUser')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Historique des Inscriptions</h4>
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
                                        <th>Région Souhaitée</th>
                                        <th>Jardin Souhaité</th>
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
                                        <td>{{ $inscription->enfant->region->nom }}</td>
                                        <td>{{ $inscription->enfant->jardin->nom }}</td>
                                        <td>
                                            <!-- Actions such as Edit or Delete can be added here -->
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
                                        <th>Région Souhaitée</th>
                                        <th>Jardin Souhaité</th>
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
