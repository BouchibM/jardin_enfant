@extends('layouts.sidebarUser')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Historique des Transferts</h4>
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
                                        <th>Nom de l'Enfant</th>
                                        <th>Ancienne Région</th>
                                        <th>Ancien Jardin</th>
                                        <th>Nouvelle Région</th>
                                        <th>Nouveau Jardin</th>
                                        <th>Status</th>
                                        <th>Motif de Rejet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($transfers as $transfer)
                                    <tr>
                                        <td>{{ $transfer->created_at }}</td>
                                        <td>{{ $transfer->enfant->nom }} {{ $transfer->enfant->prenom }}</td>
                                        <td>{{ $transfer->ancienneRegion->nom ?? 'N/A' }}</td>
                                        <td>{{ $transfer->ancienJardin->nom ?? 'N/A' }}</td>
                                        <td>{{ $transfer->nouvelleRegion->nom ?? 'N/A' }}</td>
                                        <td>{{ $transfer->nouveauJardin->nom ?? 'N/A' }}</td>
                                        <td>{{ ucfirst($transfer->status) }}</td>
                                        <td>{{ $transfer->motif_rejet ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date de la Demande</th>
                                        <th>Nom de l'Enfant</th>
                                        <th>Ancienne Région</th>
                                        <th>Ancien Jardin</th>
                                        <th>Nouvelle Région</th>
                                        <th>Nouveau Jardin</th>
                                        <th>Status</th>
                                        <th>Motif de Rejet</th>
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
