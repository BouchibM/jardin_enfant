@extends('layout.nav_bar')

@section('title')Ajout utilisateur @endsection

@section('item_1')<a class="nav-link" href="{{route('admin.acceuil')}}">Acceuil</a> @endsection


@include('composants.nav_gauche')


@section('main')


<div class="container mt-5">
  <h2>Ajout d'un utilisateur:</h2>
  <form method="post" action="{{route('admin.enr')}}">
    @csrf
    <div id="etape_1">
    <fieldset>
      <legend>Informations employé:</legend>
      <div class="row">
        <!-- Première partie -->
        <div class="col">
          <div class="mb-3">
            <label class="form-label">Matricule:</label>
            <input type="number" class="form-control" name="matricule" value="{{old('matricule')}}">
            @error('matricule')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Nom:</label>
            <input type="text" class="form-control" name="nom" value="{{old('nom')}}">
            @error('nom')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Prenom:</label>
            <input type="text" class="form-control" name="prenom" value="{{old('prenom')}}">
            @error('prenom')
              <span class="text-danger">{{$message}}</span>
            @enderror <br>

            <label class="form-label">Date de naissance:</label>
            <input type="date" class="form-control" name="date_naiss" value="{{old('date_naiss')}}">
            @error('date_naiss')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Lieu de naissance:</label>
            <input type="text" class="form-control" name="lieu_naiss" value="{{old('lieu_naiss')}}">
            @error('lieu_naiss')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Adresse:</label>
            <input type="text" class="form-control" name="adresse" value="{{old('adresse')}}">
            @error('adresse')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">E-mail:</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            @error('email')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Rôle</label>
            <select class="form-control" name="role" value="{{old('role')}}">
              <option selected></option>
              <option value="admin">admin</option>
              <option value="chef_centre">chef de centre</option>
              <option value="infirmiere">infirmière</option>
              <option value="medecin">médecin</option>
              <option value="patient">patient</option>   
            </select>
            @error('role')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            
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
            <label class="form-label">Date recrutement:</label>
            <input type="date" class="form-control" name="date_deb" value="{{old('date_deb')}}">
             @error('date_deb')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Entreprise:</label>
            <input type="text" class="form-control" name="Entreprise" value="{{old('Entreprise')}}"><br>
            <label class="form-label">Structure:</label>
            <input type="text" class="form-control" name="Structure" value="{{old('Structure')}}"><br>
            <label class="form-label">Atelier::</label>
            <input type="text" class="form-control" name="Atelier" value="{{old('Atelier')}}">
          </div>
        </div>
      </div>
    </fieldset>
    <button type="button" class="btn btn-success" onclick="passer_etape()">Continuer</button>
  </div>
    <div id="etape_2" style="display: none;">
    <fieldset>
      <legend>Sécurité compte:</legend>
      <div class="row">
        <!-- Troisième partie -->
        <div class="col">
          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password">
            @error('password')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
            <label class="form-label">Retapez le mot de passe:</label>
            <input type="password" class="form-control" name="password_confirmation">
            @error('password_confirmation')
              <span class="text-danger">{{$message}}</span>
            @enderror<br>
          </div>
        </div>
      </div>
    </fieldset>
    <button type="reset" class="btn">Annuler</button>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
  </form>
</div>

<script>
  function passer_etape(){
    document.getElementById('etape_1').style.display = 'none';
    document.getElementById('etape_2').style.display = 'block';
  }
</script>

@endsection
