@extends('layouts.sidebarDirectrice')
@section('main')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Liste Enfants</h4>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Selectione la classe :</h5>
                            <form id="changeClassForm"> <select id="classSelect" class="form-select">
                                    <option value="class1">A</option>
                                    <option value="class2">B</option>
                                    <option value="class3">C</option>
                                </select>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <form id="modifyForm" method="POST">
                                @csrf
                                @method('Modify')
                                <button type="button" class="btn btn-outline-dark border-dotted"
                                    data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-warning" id="reafectButton">Réafécter</button>
                            </form>
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
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Date de Naissance</th>
                                        <th scope="col">Lieu</th>
                                        <th scope="col">Adresse Actuelle</th>
                                        <th scope="col">Groupe Sanguin</th>
                                        <th scope="col">Parent</th>
                                        <th scope="col">Classe</th>
                                        <th scope="col">Date de Création</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ABDELLAH EL HADJ</td>
                                        <td>Lyna</td>
                                        <td>2019/10/26</td>
                                        <td>Null</td> <!-- Since 'lieu' is null -->
                                        <td>Null</td> <!-- Since 'adresse_actuelle' is null -->
                                        <td>Null</td> <!-- Since 'groupe_sanguin' is null -->
                                        <td>1</td> <!-- Parent ID -->
                                        <td>3</td> <!-- Classe ID -->
                                        <td>null</td> <!-- Date de Création -->
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
                                                <a class="btn btn-sm btn-icon btn-warning reafect-btn"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                    data-bs-placement="top" data-original-title="Edit" href="#"
                                                    aria-label="Modifier" data-bs-original-title="Modifier">

                                                    <span class="btn-inner">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ABDELLALI</td>
                                        <td>Anes</td>
                                        <td>2019/01/13</td>
                                        <td>Null</td> <!-- Since 'lieu' is null -->
                                        <td>Null</td> <!-- Since 'adresse_actuelle' is null -->
                                        <td>Null</td> <!-- Since 'groupe_sanguin' is null -->
                                        <td>2</td> <!-- Parent ID -->
                                        <td>2</td> <!-- Classe ID -->
                                        <td>Null</td> <!-- Date de Création -->
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
                                                <a class="btn btn-sm btn-icon btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal" data-bs-placement="top"
                                                    data-original-title="Edit" href="#" aria-label="Modifier"
                                                    data-bs-original-title="Modifier">
                                                    <span class="btn-inner">
                                                        <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                            <path d="M15.1655 4.60254L19.7315 9.16854"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Prénom</th>
                                        <th scope="col">Date de Naissance</th>
                                        <th scope="col">Lieu</th>
                                        <th scope="col">Adresse Actuelle</th>
                                        <th scope="col">Groupe Sanguin</th>
                                        <th scope="col">Parent</th>
                                        <th scope="col">Classe</th>
                                        <th scope="col">Date de Création</th>
                                        <th scope="col">Actions</th>
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