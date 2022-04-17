@extends('template')

@section('titre')
    Login
@endsection

@section('contenu')
 <h1>Connexion</h1>


 <form action="" method="get" class="form-example">
    <div class="form-example">
      <label for="name">Email: </label>
      <input type="text" name="name" id="name" required>
    </div>
    <div class="form-example">
        <label for="name">Mot de passe: </label>
        <input type="password" name="password" id="name" required>
      </div>
      <div class="form-example">
        <input type="submit" value="Connexion!">
        <a href="{{URL('create')}}">S'inscrire</a>
      </div>
@endsection
