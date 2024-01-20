<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Vendito</title>
  <link rel="stylesheet" href="{{ asset('css/style_about.css') }}">
<style>

</style>
</head>
<body>

<div class="about-section">
  <h1>A propos</h1>
  <p>Tout pour vous</p>
  <p>Vendito est un site web de petites annonces en ligne qui opère au Maroc, principalement dans le domaine des biens de consommation d'occasion. Fondé en 2024, Avito permet aux utilisateurs de publier gratuitement des annonces pour vendre et acheter une variété de produits tels que des vêtements, des meubles, des appareils électroniques, des véhicules, et bien d'autres.</p>
  <a href="{{ route('marketplace') }}"><button class="button" style="background-color: transparent">Acceuil</button></a>
</div>


<h2 style="text-align:center">Notre Equipe</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Anass AJJA</h2>
        <p class="title">CEO & Founder</p>
        <p>Etudiant B2 Casablanca Ynov Campus and Sofware developer</p>
        <p>anass.ajja@ynov.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Programmer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Business Manager</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
