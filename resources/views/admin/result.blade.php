@extends('layout.nav_bar')

@section('title')Acceuil Admin @endsection

@section('item_1')<a class="nav-link" href="{{route('admin.acceuil')}}">Acceuil</a> @endsection



@include('composants.nav_gauche')



@section('main')
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

  <div class="container mt-5">
    <h2>Liste des utilisateurs:</h2>
    <div class="row justify-content-end mb-3">
        <div class="col-4">
            <!-- Barre de recherche -->
            <form action="{{route('admin.recherche')}}" method="post" class="input-group">
                @csrf
                <input type="text" class="form-control" placeholder="Rechercher..." name="Rechercher">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </div>
            </form>
        </div>
    </div>
    
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Matricule</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">Email</th>
          <th scope="col">Date de naissance</th>
          <th scope="col">Lieu de naissance</th>
          <th scope="col">Adresse</th>
          <th scope="col">Entreprise</th>
          <th scope="col">Structure</th>
          <th scope="col">Atelier</th>
          <th scope="col">Rôle</th>
          <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
        </tr>
      </thead>
      <tbody>
        @foreach ($employes as $employe)
            
        <tr>
          <th scope="row">{{$employe->matricule}}</th>
          <td>{{$employe->nom}}</td>
          <td>{{$employe->prenom}}</td>
          <td>{{$employe->email}}</td>
          <td>{{$employe->date_naiss}}</td>                                   
          <td>{{$employe->lieu_naiss}}</td>    
          <td>{{$employe->adresse}}</td>      
          <td>{{$employe->entreprise}}</td>  
          <td>{{$employe->structure}}</td>
          <td>{{$employe->atelier}}</td>    
          <td>{{$employe->role}}</td>  
          <td>
            <form method="post" action="{{route('admin.ed')}}">
                @csrf
                <button type="button" class="btn btn-primary btn-sm">Modifier</button>
            </form>
            <form method="post" action="{{route('admin.sup', $employe->id)}}">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm">Supprimer</button>
            </form>
          </td>
        </tr>
    </td>
</tr>
 @endforeach
         
          
      </tbody>
    </table>
  </div>
@endsection