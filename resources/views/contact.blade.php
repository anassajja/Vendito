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
      <header>Contact</header>
      <form method="POST" class="form" action="{{ route('contact') }}">
        @csrf
        <div class="input-box">
            <label>Nom Complet</label>
            <input type="text" name="name" placeholder="Entrer votre nom complet" required />
        </div>
        <div class="input-box">
            <label>Email</label>
          <input type="email" name="email" placeholder="Entrer votre adresse mail" required />
        </div>
        <div class="input-box">
            <label>Sujet</label>
          <input type="text" name="subject" placeholder="Sujet" required />
        </div>
        <div class="input-box">
            <label>Message</label>
            <textarea name="message" placeholder="Entrer votre message" required></textarea>
        </div>
        <button type="submit">Envoyer</button>
      </form>
    </section>
  </body>
</html>