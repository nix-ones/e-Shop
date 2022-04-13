@extends('template')

@section('titre')
    Account
@endsection

@section('contenu')
 <h1>je m'inscris</h1>



 <form action="" method="get" class="form-example">
    <div class="form-example">
      <label for="name">Nom: </label>
      <input type="text" name="name" id="name" required>
    </div>
    <div class="form-example">
        <label for="name">Prenom: </label>
        <input type="text" name="prenom" id="name" required>
      </div>
      <div class="form-example">
        <label for="name">Date de naissance: </label>
        <input type="Date" name="birth" id="name" required>
      </div>
    <div class="form-example">
      <label for="email">Mail:: </label>
      <input type="email" name="email" id="email" required>
    </div>
    <div class="form-example">
        <label for="name">Adresse: </label>
        <input type="text" name="adresse" id="name" required>
      </div>
      <div class="form-example">
        <label for="name">pseudo: </label>
        <input type="text" name="pseudo" id="name" required>
      </div>

      <div class="form-example">
        <label for="name">Sexe: </label>
        <input type="password" name="password" id="name" required>
      </div>
      <div class="form-example">
        <label for="name">Repète mot de passe: </label>
        <input type="password" name="password2" id="name" required>
      </div>
      <div class="form-example">
        <label for="name">Mot de passe: </label>
        <input type="radio" name="homme"  /> M
        <input type="radio" name="femme" /> F
        <input type="radio" name="autre"  /> Autre
      </div>
    <div class="form-example">
      <input type="submit" value="Enregistre!"> 
    </div>
  </form>

@endsection



