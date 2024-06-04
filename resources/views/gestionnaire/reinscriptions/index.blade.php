@extends('layouts.sidebarGestionnaire')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Gestion des Réinscriptions</h4>
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
                                        <th>Nom du Parent</th>
                                        <th>Enfant</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reinscriptions as $reinscription)
                                    <tr>
                                        <td>{{ $reinscription->created_at }}</td>
                                        <td>{{ $reinscription->parent->nom ?? 'Parent inconnu' }}</td>
                                        <td>{{ $reinscription->enfant->nom ?? 'Enfant inconnu' }}</td>
                                        <td>{{ $reinscription->status }}</td>
                                        <td>
                                            @if($reinscription->status == 'pending')
                                                <form action="{{ route('gestionnaire.reinscriptions.accept', $reinscription->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">Accepter</button>
                                                </form>
                                                <form action="{{ route('gestionnaire.reinscriptions.reject', $reinscription->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <input type="text" name="reason" placeholder="Motif du rejet" required>
                                                    <button type="submit" class="btn btn-danger">Rejeter</button>
                                                </form>
                                            @elseif($reinscription->status == 'payment_verification_pending')
                                                <form action="{{ route('gestionnaire.reinscriptions.verifyPayment', $reinscription->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">Vérifier Paiement</button>
                                                </form>
                                            @else
                                                <button class="btn btn-secondary" disabled>
                                                    {{ $reinscription->status == 'approved' ? 'Approuvée' : 'Complétée' }}
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date de la Demande</th>
                                        <th>Nom du Parent</th>
                                        <th>Enfant</th>
                                        <th>Status</th>
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