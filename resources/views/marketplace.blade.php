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
    <a href="{{ route('marketplace')}}" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Your Logo">
    </a>
    <nav>
        <ul>
            <li><a href="{{ route('marketplace')}}">Accueil</a></li>
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
    <!-- Filter Icon -->
    <div class="filter-icon" onclick="toggleFilter()">
        <i class="fas fa-filter"></i>
    </div>

    <!-- City Filter List -->
    <div id="filter-list" style="display: none;">
        <h4>Filter by City:</h4>
        <ul>
            <a href="{{ route('marketplace.location', ['location' => 'Rabat']) }}">Rabat</a>
            <a href="{{ route('marketplace.location', ['location' => 'Casablanca']) }}">Casablanca</a>
            <a href="{{ route('marketplace.location', ['location' => 'Marrakech']) }}">Marrakech</a>
            <a href="{{ route('marketplace.location', ['location' => 'Benguerir']) }}">Benguerir</a>
            <!-- Add more cities here -->
        </ul>
    </div>

    <script>
        function toggleFilter() {
            var filterList = document.getElementById("filter-list");
            if (filterList.style.display === "none") {
                filterList.style.display = "block";
            } else {
                filterList.style.display = "none";
            }
        }
    </script>
    <!-- Inside the publish-button in your Blade.php file -->
    <button type="button" class="publish-button" onclick="window.location='{{ route('offer') }}'"><i class="fas fa-plus"></i> Publier annonce</button>
</header>
    <div class="container">
        <h2 style="text-align: center;">Que cherchez-vous ?</h2>
        <div class="category-cards" style="display: flex; width: 100%; height: auto; background-color: transparent;">
            <!-- Category Cards go here -->
            <div class="card" style="background-color: red;">
                <a href="{{ route('marketplace.category', ['category' => 'Vêtements']) }}"><i class="fas fa-tshirt"></i></a>
                <h4>Vêtements</h4>
            </div>
            <div class="card" style="background-color: red;">
                <a href="{{ route('marketplace.category', ['category' => 'Immobilier']) }}"><i class="fas fa-home"></i></a>
                <h4>Immobilier</h4>
            </div>
            <div class="card" style="background-color: rgb(150, 150, 184);">
                <a href="{{ route('marketplace.category', ['category' => 'Automobile']) }}"><i class="fas fa-car"></i></a>
                <h4>Automobile</h4>
            </div>
            <div class="card" style="background-color: green;">
                <a href="{{ route('marketplace.category', ['category' => 'Électronique']) }}"><i class="fas fa-mobile-alt"></i></a>
                <h4>Électronique</h4>
            </div>
            <div class="card" style="background-color: yellow;">
                <a href="{{ route('marketplace.category', ['category' => 'Livres']) }}"><i class="fas fa-book"></i></a>
                <h4>Livres</h4>
            </div>
            <div class="card" style="background-color: orange;">
                <a href="{{ route('marketplace.category', ['category' => 'Jeux vidéo']) }}"><i class="fas fa-gamepad"></i></a>
                <h4>Jeux vidéo</h4>
            </div>
            <div class="card" style="background-color: purple;">
                <a href="{{ route('marketplace.category', ['category' => 'Sports et loisirs']) }}"><i class="fas fa-bicycle"></i></a>
                <h4>Sports et loisirs</h4>
            </div>
            <div class="card" style="background-color: pink;">
                <a href="{{ route('marketplace.category', ['category' => 'Animaux']) }}"><i class="fas fa-paw"></i></a>
                <h4>Animaux</h4>
            </div>
            <div class="card" style="background-color: brown;">
                <a href="{{ route('marketplace.category', ['category' => 'Motos']) }}"><i class="fas fa-motorcycle"></i></a>
                <h4>Motos</h4>
            </div>
            <div class="card" style="background-color: gray;">
                <a href="{{ route('marketplace.category', ['category' => 'Autres']) }}"><i class="fas fa-ellipsis-h"></i></a>
                <h4>Autres</h4>
            </div>
        </div>
    </div>

    <h2 style="text-align: center;">Annonces</h2>
        <div class="annonce-container" style="display: flex; flex-wrap: wrap; justify-content: center;">
            @foreach ($offers as $offer)
                <div class="annonce" style="flex: 0 0 25%; margin: 10px;">
                    <h3>{{ $offer->title }}</h3>
                    <img src="{{ asset('images/' . $offer->image_path) }}" alt="Offer Image" class="offer-image">
                    <p>{{ $offer->description }}</p>
                    <p>{{ $offer->location }}</p>
                    <p>{{ $offer->price }} DH</p>
                    <p>{{ $offer->user->first_name }}</p>
                    <a href="{{ route('annonce', ['id' => $offer->id]) }}"><button class="details-button">Plus de details</button></a>
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
