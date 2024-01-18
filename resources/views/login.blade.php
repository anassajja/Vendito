<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Vendito</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
  </head>
  <body>
    <section class="container">
      <header>Connexion</header>
      <form method="POST" class="form" action="{{ route('login') }}">
        @csrf
        <div class="input-box">
            <label>Nom d'utilisateur</label>
            <input type="text" name="username" placeholder="Entrer votre nom d'utilisateur" required />
        </div>
        <div class="input-box">
            <label>Mot de passe</label>
          <input type="password" name="password" placeholder="Entrer votre mot de passe" required />
        </div>
        <button>Se connecter</button>
        <br><br>
        <p>Vous m'avez pas de compte ? <a href="{{ route('register') }}">Creer un compte</a></p>
        <br>
        <p>Vous avez oubliez votre mot de passe ? <a href="{{ route('password_reset') }}">Réinitialiser le mot de passe</a></p>
      </form>
    </section>
  </body>
</html>