<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendito</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<header>
    <a href="" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Your Logo">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('about')}}">A propos</a></li>
            <li><a href="{{ route('contact')}}">Contact</a></li>
            @if(Auth::check())
                <li style="color: white"><i class="fas fa-user" style="color: white"></i> {{ auth()->user()->username }}</li>
            @else
                <li><a href="{{ route('login') }}">Se connecter</a></li>
            @endif
            <li><a href="{{ route('logout') }}">Se déconnecter</a></li>
        </ul>
    </nav>
    <!-- Inside the publish-button in your Blade.php file -->
    <button type="button" class="publish-button" onclick="window.location='{{ route('offer') }}'"><i class="fas fa-plus"></i> Publier annonce</button>

</header>
    <div class="container">
        <h2>Que cherchez-vous ?</h2>
        <div class="category-cards" style="display: flex; width: 100%; height: auto; background-color: transparent;">
            <!-- Category Cards go here -->
            <div class="card" style="background-color: red;">
                <i class="fas fa-home"></i>
                <h4>Immobilier</h4>
            </div>
            <div class="card" style="background-color: blue;">
                <i class="fas fa-car"></i>
                <h4>Automobile</h4>
            </div>
            <div class="card" style="background-color: green;">
                <i class="fas fa-mobile-alt"></i>
                <h4>Électronique</h4>
            </div>
            <div class="card" style="background-color: yellow;">
                <i class="fas fa-book"></i>
                <h4>Livres</h4>
            </div>
            <div class="card" style="background-color: orange;">
                <i class="fas fa-gamepad"></i>
                <h4>Jeux vidéo</h4>
            </div>
            <div class="card" style="background-color: purple;">
                <i class="fas fa-bicycle"></i>
                <h4>Sports et loisirs</h4>
            </div>
            <div class="card" style="background-color: pink;">
                <i class="fas fa-paw"></i>
                <h4>Animaux</h4>
            </div>
            <div class="card" style="background-color: brown;">
                <i class="fas fa-motorcycle"></i>
                <h4>Motos</h4>
            </div>
            <div class="card" style="background-color: gray;">
                <i class="fas fa-ellipsis-h"></i>
                <h4>Autres</h4>
            </div>
        </div>
    </div>

    <div class="annonce-container">
        <h2>Annonces</h2>
        <!-- Annonces go here -->
            @foreach ($offers as $offer)
                <div class="annonce">
                <h3>{{ $offer->title }}</h3>
                <img src="{{ asset('images/' . $offer->image_path) }}" alt="Offer Image" class="offer-image">
                <p>{{ $offer->description }}</p>
                <p>{{ $offer->price }} DH</p>
                <p>{{ $offer->user->first_name }}</p>
                <a href="{{ route('product', ['id' => $offer->id]) }}"><button class="details-button">Plus de details</button></a>
                </div>
            @endforeach
    </div>

      <footer>
            <!-- Réseaux sociaux -->
            <div class="social-icons">
                <a href="https://web.facebook.com/anass.ajja.92/"><i class="fab fa-facebook" style="color: white;"></i></a>
                <a href=""><i class="fab fa-twitter" style="color: white;"></i></a>
                <a href="https://www.instagram.com/anass_ajja7/"><i class="fab fa-instagram" style="color: white;"></i></a>
                <a href="https://www.linkedin.com/in/anass-ajja-9ba9121a1/"><i class="fab fa-linkedin" style="color: white;"></i></a>
                <a href="https://github.com/anassajja"><i class="fab fa-github" style="color: white;"></i></a>
            </div>
            <p>&copy; 2024 Vendito</p>
        </footer>
</body>
</html>
