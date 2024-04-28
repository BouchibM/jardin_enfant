@extends('layout.nav_bar')

@section('title')Ajout utilisateur @endsection

@section('item_1')<a class="nav-link" href="{{route('admin.acceuil')}}">Acceuil</a> @endsection


@include('composants.nav_gauche')


@section('main')
   
<div class="container mt-5">
    <h2>Modification d'un poste:</h2>
   <form class="form" method="{{route('admin.poste.up')}}" action="post">
        @csrf
        @method('PUT')
        <label>Désignation:</label>
        <input class="form-control" type="text" name="designation" value="$poste->designation">
        @error('designation')
        <span class="text-danger">{{$message}}</span>
      @enderror<br>
        <label>Utilisé:</label>
        <select class="form-control" name="utilise" value="$poste->utilise">
            <option selected></option>
            <option>Oui</option>
            <option>Non</option>
        </select>
        @error('utilise')
        <span class="text-danger">{{$message}}</span>
      @enderror<br>
      <button type="reset" class="btn">Annuler</button>
    <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
