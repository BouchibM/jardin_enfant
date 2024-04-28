@extends('layout.nav_bar')



@section('main')


<div class="container mt-5">
  <h2>Ajout d'un utilisateur:</h2>
  <form method="post" action="{{route('admin.up')}}">
    @csrf
    @method('PUT')
    <div id="etape_1">
    <fieldset>
      <legend>Informations employé:</legend>
      <div class="row">
        <!-- Première partie -->
        <div class="col">
          <div class="mb-3">
            <label class="form-label">Matricule:</label>
            <input type="number" class="form-control" name="matricule" value="{{$employe->matricule}}">
            @error('matricule')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom" value="{{$employe->nom}}">
            @error('nom')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom" value="{{$employe->prenom}}">
            @error('prenom')
              <span class="text-danger">{{$message}}</span>
            @enderror
            <label class="form-label">Date de naissance:</label>
            <input type="date" class="form-control" name="date_naiss" value="{{$employe->date_naiss}}">
            @error('date_naiss')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Lieu de naissance:</label>
            <input type="text" class="form-control" name="lieu_naiss" value="{{$employe->lieu_naiss}}">
            @error('lieu_naiss')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Adresse:</label>
            <input type="text" class="form-control" name="adresse" value="{{$employe->adresse}}">
            @error('adresse')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" value="{{$employe->email}}">
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Rôle</label>
            <select class="form-control" name="role" >
              <option selected value="{{$employe->role}}">{{$employe->role}}</option>
              <option value="admin">admin</option>
              <option value="chef_centre">chef de centre</option>
              <option value="infirmiere">infirmière</option>
              <option value="medecin">médecin</option>
              <option value="patient">patient</option>   
            </select>
            @error('role')
              <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        </div>
      </div>
    </fieldset>
    
    <fieldset>
      <legend>Informations poste</legend>
      <div class="row">
        <!-- Deuxième partie -->
        <div class="col">
          <div class="mb-3">  
             <input type="date" class="form-control" name="date_deb" value="{{$employe->date_deb}}">
            @error('date_deb')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
          </div>
        </div>
      </div>
    </fieldset>
    
  </div>
    
    <button type="reset" class="btn">Annuler</button>
    <button type="submit" class="btn btn-primary">Modifier</button>
    </div>
  </form>
</div>



@endsection
