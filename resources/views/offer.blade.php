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
   @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <section class="container">
      <header>Publier une annonce</header>
      <form method="POST" action="{{ route('offer') }}" enctype="multipart/form-data" class="form">
        @csrf
        <div class="input-box">
          <label>Titre d'article <span style="color: red">*</span></label>
          <input type="text" name="title" placeholder="Entrer votre article titre" required />
        </div>
        <div class="input-box">
            <label>Description d'article <span style="color: red">*</span></label>
            <textarea name="description" placeholder="Entrer votre article description" required></textarea>
        </div>
        <br>
        <div class="input-box">
            <label>Prix d'article <span style="color: red">*</span></label>
            <input type="number" name="price" step="0.10">
        </div>
        <br>
        <div class="input-box">
            <label>Image d'article <span style="color: red">*</span></label>
            <input type="file" name="image" accept="image/png, image/jpeg, image/jpg" required />
        </div>
        <br>
        <label>Categorie d'article <span style="color: red">*</span></label>
        <div class="select-box">
                <select name="category">
                  <option hidden value="Category">Category</option>
                  <option value="Immobilier">Immobilier</option>
                  <option value="Automobile">Automobile</option>
                  <option value="Electronique">Electronique</option>
                  <option value="Livres">Livres</option>
                  <option value="Jeux video">Jeux video</option>
                  <option value="Sport & Leisure">Sport & Leisure</option>
                  <option value="Animaux">Animaux</option>
                  <option value="Motos">Motos</option>
                  <option value="Autre">Autre</option>
                </select>
        </div>
        <div class="input-box">
            <label>Adresse d'article <span style="color: red">*</span></label>
            <input type="text" name="location" placeholder="Entrer votre article adresse" required />
        </div>
        <div class="input-box">
            <label>Marque<span style="color: red">*</span></label>
            <input type="text" name="brand" placeholder="Entrer votre article marque" required />
        </div>
        <br>
        <label>Etat d'article <span style="color: red">*</span></label>
        <div class="select-box">
          <select name="condition">
            <option hidden value="Condition">Condition</option>
            <option value="Neuf">Neuf</option>
            <option value="Occasion">Occasion</option>
          </select>
        </div>
        <br>
        <label>Livraison <span style="color: red">*</span></label>
        <div class="select-box">
            <select name="delivery">
            <option hidden value="Livraison">Livraison</option>
            <option value="Livraison à domicile">Livraison à domicile</option>
            <option value="Livraison express">Livraison express</option>
            <option value="Livraison sur rendez-vou">Livraison sur rendez-vous</option>
            </select>
        </div>
        <br>
        <label>Paiment <span style="color: red">*</span></label>
        <div class="select-box">
            <select name="payment">
            <option value="Cash">Cash</option>
            <option value="Carte bancaire">Carte bancaire</option>
            <option value="Wafacash">Wafacash</option>
            <option value="Paypal">Paypal</option>
            </select>
        </div>
        <br>
        <label>Confirmation <span style="color: red">*</span></label>
        <div class="select-box">
            <select name="confirmation_status">
            <option hidden value="Confirmation">Confirmation</option>
            <option value="Confirm">Confirmer</option>
            <option value="Reject">Rejeter</option>
            </select>
        </div>
        <br>
        <label>Etat de vente <span style="color: red">*</span></label>
        <div class="select-box">
            <select name="sale_status">
            <option value="sold">Vendu</option>
            <option value="for_sale">En vente</option>
            </select>
        </div>
        <button>Publier</button>
        @if($errors->any())
        <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <script>
                    alert('{{ $error }}');
                  </script>
                @endforeach
        </div>
        @endif
      </form>
    </section>
  </body>
</html>