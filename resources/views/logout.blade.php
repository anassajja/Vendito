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
      <header>Deconnexion</header>
      <form method="POST" class="form" action="{{ route('logout') }}">
        @csrf
        <button>Se deconnecte</button>
      </form>
    </section>
  </body>
</html>