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
      <form method="POST" class="form" action="{{ route('password_reset') }}}">
        @csrf
        <div class="input-box">
            <label>Adresse mail <span style="color: red">*</span></label>
            <input type="email" name="email" placeholder="Entrer votre nom d'utilisateur" required />
        </div>
        <div class="input-box">
            <label>Nouveau mot de passe<span style="color: red">*</span></label>
          <input type="password" name="new_password" placeholder="Entrer votre mot de passe" required />
        </div>
        <div class="input-box">
            <label>Confirmer mot de passe<span style="color: red">*</span></label>
          <input type="password" name="new_password_confirmation" placeholder="Confirmer votre mot de passe" required />
        </div>
        <button>Réinitialiser mot de passe</button>
      </form>
    </section>
  </body>
</html>