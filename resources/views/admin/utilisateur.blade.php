@extends('layouts.sidebar')
@section('main')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Liste Utilisateurs</h4>
                    </div>
                    <a href=""
                        class="text-center btn btn-outline-secondary border-dotted btn-icon mt-lg-0 mt-md-0 mt-3"
                        >
                        <i class="btn-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                        </i>
                        <span>Ajouter Utilisateur</span>
                    </a>
                </div>

                    
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <br>
                                <h5>Êtes-vous sûr de vouloir supprimer ?</h5>
                                <br>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark border-dotted"
                                    data-bs-dismiss="modal">Annuler</button>
                                <button type="button" class="btn btn-warning">OK</button>
                            </div>
                        </div>
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
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Entreprise</th>
                                            <th scope="col">Structure</th>
                                            <th scope="col">Rôle</th>
                                            <th scope="col">Statue</th>
                                            <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td>1223</td>
                                            <td>othman</td>
                                            <td>anis</td>
                                            <td>oth@gmail.com</td>
                                            <td>sonatrach</td>
                                            <td>dc dsi</td>
                                            <td>Médecin</td>
                                            <td><span class="badge bg-primary">Active</span></td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <a class="btn btn-sm btn-icon btn-default" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" href="#" aria-label="Consulter"
                                                        data-bs-original-title="Consulter">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z"
                                                                    stroke="#130F26"></path>
                                                                <circle cx="12" cy="12" r="5"
                                                                    stroke="#130F26"></circle>
                                                                <circle cx="12" cy="12" r="3" fill="#130F26">
                                                                </circle>
                                                                <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="9"
                                                                    y="9" width="6" height="6">
                                                                    <circle cx="12" cy="12" r="3"
                                                                        fill="#130F26"></circle>
                                                                </mask>
                                                                <circle opacity="0.89" cx="13.5" cy="10.5" r="1.5"
                                                                    fill="white"></circle>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" data-original-title="Edit" href="#"
                                                        aria-label="Modifier" data-bs-original-title="Modifier">
                                                        <span class="btn-inner">
                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-sm btn-icon btn-danger" data-bs-toggle="modal"
                                                        data-bs-placement="top" href="#" aria-label="Supprimer"
                                                        data-bs-original-title="Supprimer"data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        <span class="btn-inner">
                                                            <!-- Bouton pour ouvrir la modal -->
                                                            

                                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg"
                                                                stroke="currentColor">
                                                                <path
                                                                    d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                                <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round"></path>
                                                                <path
                                                                    d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                                    stroke="currentColor" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>

                                        <tr>
                                            <th scope="col">Matricule</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Entreprise</th>
                                            <th scope="col">Structure</th>
                                            <th scope="col">Rôle</th>
                                            <th scope="col">Statue</th>
                                            <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
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
