@extends('layouts.sidebarUser')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Liste Enfants</h4>
                </div>
            
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap5">
                        <div class="table-responsive border-bottom my-3">
                            <table id="datatable" class="table table-striped dataTable" data-toggle="data-table"
                                aria-describedby="datatable_info">
                                <thead>
                                    <tr>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Date de naissance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enfants as $enfant)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="{{ asset('images/' . $enfant->photo_path) }}" alt=""
                                                        class="avatar avatar-md rounded">
                                                </div>
                                            </td>
                                            <td>{{ $enfant->Nom }}</td>
                                            <td>{{ $enfant->Prenom }}</td>
                                            <td>{{ $enfant->Date_de_naissance }}</td>
                                            
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-default" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" href="#" aria-label="Consulter"
                                                        data-bs-original-title="Consulter">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z"
                                                                    stroke="#130F26"></path>
                                                                <circle cx="12" cy="12" r="5" stroke="#130F26"></circle>
                                                                <circle cx="12" cy="12" r="3" fill="#130F26">
                                                                </circle>
                                                                <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="9"
                                                                    y="9" width="6" height="6">
                                                                    <circle cx="12" cy="12" r="3" fill="#130F26">
                                                                    </circle>
                                                                </mask>
                                                                <circle opacity="0.89" cx="13.5" cy="10.5" r="1.5"
                                                                    fill="white">
                                                                </circle>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                    <tr>

                                        <th scope="col">Photo</th>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prenom</th>
                                        <th scope="col">Date de naissance</th>
                                        
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