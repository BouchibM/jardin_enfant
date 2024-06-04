@extends('layouts.sidebarUser')

@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Historique des Réinscriptions</h4>
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
                                        <th>Section Actuelle</th>
                                        <th>Nouvelle Section</th>
                                        <th>Status</th>
                                        <th>Motif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reinscriptions as $reinscription)
                                    <tr>
                                        <td>{{ $reinscription->created_at }}</td>
                                        <td>{{ $reinscription->enfant->nom }}</td>
                                        <td>{{ $reinscription->enfant->section->nom }}</td>
                                        <td>{{ $reinscription->newSection->nom ?? 'N/A' }}</td>
                                        <td>{{ $reinscription->status }}</td>
                                        <td>{{ $reinscription->rejection_reason ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Date de la Demande</th>
                                        <th>Nom de l'Enfant</th>
                                        <th>Section Actuelle</th>
                                        <th>Nouvelle Section</th>
                                        <th>Status</th>
                                        <th>Motif</th>
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