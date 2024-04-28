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
            <form action="{{route('admin.poste.recherche')}}" method="post" class="input-group">
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
          <th scope="col"># ID</th>
          <th scope="col">Designation</th>
          <th scope="col">Utilisé</th>
          <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
        </tr>
      </thead>
      <tbody>
        @foreach ($postes as $poste)
            
        <tr>
          <th scope="row">{{$poste->id}}</th>
          <td>{{$poste->designation}}</td>
          <td>{{$poste->utilise}}</td>
          
          <td>
            <form method="post" action="{{route('admin.poste.ed')}}">
                @csrf
                <button type="button" class="btn btn-primary btn-sm">Modifier</button>
            </form>
            <form method="post" action="{{route('admin.poste.sup', $poste->id)}}">
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