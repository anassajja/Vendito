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
            <li><a href="{{ asset('about')}}">A propos</a></li>
            <li><a href="{{ asset('contact')}}">Contact</a></li>
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

<h2 style="text-align: center;">Annonce details:</h2>
    <div class="annonce-container" style="display: flex; justify-content: center; align-items: center;">
        <div class="annonce">
            <h3>Details du Produit {{ $offer->title }}</h3>
            <img src="{{ asset('images/' . $offer->image_path) }}" alt="Offer Image" class="offer-image">
            <p>{{ $offer->category }}</p>
            <p>{{ $offer->description }}</p>
            <p>{{ $offer->brand }}</p>
            <p>{{ $offer->condition }}</p>
            <p>{{ $offer->delivery }}</p>
            <p>{{ $offer->payment }}</p>
            <p>{{ $offer->price }}</p>
            <p>{{ $offer->location }}</p>
            <h4>Vendeur Information:</h4>
            @if ($offer->user)
                <p>{{ $offer->user->first_name }}</p>
                <p>{{ $offer->user->last_name }}</p>
                <p>{{ $offer->user->email }}</p>
                <p>{{ $offer->user->numero_telephone }}</p>
            @else
                <p>No user associated with this offer</p>
            @endif
        </div>
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
