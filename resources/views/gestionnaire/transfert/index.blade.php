@extends('layouts.sidebarGestionnaire')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Gérer les Transferts</h4>
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
                                        <th>Actions</th>
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
                                        <td>
                                            @if($transfer->status === 'pending')
                                                <form method="POST" action="{{ route('gestionnaire.transfert.accept', $transfer->id) }}" style="display:inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Accepter</button>
                                                </form>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#rejectModal{{ $transfer->id }}">Rejeter</button>

                                                <!-- Reject Modal -->
                                                <div class="modal fade" id="rejectModal{{ $transfer->id }}" tabindex="-1" aria-labelledby="rejectModalLabel{{ $transfer->id }}" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="rejectModalLabel{{ $transfer->id }}">Rejeter la Demande de Transfert</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form method="POST" action="{{ route('gestionnaire.transfert.reject', $transfer->id) }}">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="motif_rejet" class="form-label">Motif de Rejet</label>
                                                                        <textarea class="form-control" name="motif_rejet" id="motif_rejet" rows="3" required></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                                    <button type="submit" class="btn btn-danger">Rejeter</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <span class="text-muted">{{ ucfirst($transfer->status) }}</span>
                                            @endif
                                        </td>
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
