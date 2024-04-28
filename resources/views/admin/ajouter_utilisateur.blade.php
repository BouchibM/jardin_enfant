@extends('layouts.sidebar')
@section('main')
<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="card">
       <div class="card-header d-flex justify-content-between">
          <div class="header-title">
             <h4 class="card-title">Ajouter Utilisateur</h4>
          </div>
       </div>
       <form method="post" action="{{route('admin.enr')}}">
         @csrf
         <div class="card-body">
             <div class="col-md-6">
                <label for="Matricule" class="form-label">Matricule</label>
                <input type="text" name="Matricule"  class="form-control" id="Matricule" >
                   @error('Matricule')
                     <div class="invalid-feedback">{{$message}}</div>
                  @enderror
             </div>
             <div class="col-md-6">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" name="Nom" class="form-control" id="Nom" >
                @error('Nom')
                   <div class="error">{{$message}}</div>
                @enderror
             </div>
             <div class="col-md-6">
                <label for="Prénom" class="form-label">Prénom</label>
                   <input type="text" name="Prénom"  class="form-control" id="Prénom" aria-describedby="inputGroupPrepend" >
                   @error('Prénom')
                      <div class="error">{{$message}}</div>
                   @enderror
                  </div>
             <div class="col-md-6">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" name="Email" class="form-control" id="Email" >
                @error('Email')
                  <div class="error">{{$message}}</div>
                @enderror
         
             </div>
             <div class="col-md-6">
                <label for="Entreprise" class="form-label">Entreprise</label>
                <select class="form-select" name="Entreprise" id="Entreprise">
                  <option value ="">[ Sélectionnez une Entreprise ]</option>
                  @foreach ($Entreprises as $Entreprise)
                      <option value="{{$Entreprise->id}}" {{$Entreprise->id == old('Entreprise_id')? ' selected': '' }}>
                          {{$Entreprise->designation}}
                      </option>
                  @endforeach

               </select>
               @error('Entreprise')
                 <div class="error">{{$message}}</div>
                @enderror
      
          </div>
             <div class="col-md-6">
                <label for="Structure" class="form-label">Structure</label>
                <select class="form-select" name="Structure" id="Structure">
                  <option value ="">[ Sélectionnez une Structure ]</option>
                  @foreach ($Structures as $Structure)
                      <option value="{{$Structure->id}}" {{$Structure->id == old('Structure_id')? ' selected': '' }}>
                          {{$Structure->designation}}
                      </option>
                  @endforeach
               </select>
               @error('Structure')
                <div class="error">{{$message}}</div>
              @enderror
             
             </div>
             <div class="col-md-6">
                <label for="Rôle" class="form-label">Rôle</label>
                <select class="form-select" name="Rôle" id="Rôle">
                  <option value ="">[ Sélectionnez un Rôle ]</option>
                </select>
                @error('Rôle')
                <div class="error">{{$message}}</div>
              @enderror
               
             </div>
             
             
             <div class="col-12">
                <button class="btn btn-primary"  type="submit">Enregistrer</button>
             </div>
       </div>
       </form>
      </div>
 </div>
@endsection
