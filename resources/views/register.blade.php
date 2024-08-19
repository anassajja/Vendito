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
      <header>Inscription</header>
      <form method="POST" action="{{ route('register') }}" class="form">
        @csrf
        <div class="input-box">
          <label>Prenom <span style="color: red">*</span></label>
          <input type="text" name="first_name" placeholder="Entrer votre prenom" required />
        </div>
        <div class="input-box">
            <label>Nom <span style="color: red">*</span></label>
            <input type="text" name="last_name" placeholder="Entrer votre nom" required />
        </div>
        <div class="input-box">
            <label>Nom d'utilisateur <span style="color: red">*</span></label>
            <input type="text" name="username" placeholder="Entrer votre nom d'utilisateur" required />
        </div>

        <div class="input-box">
          <label>Adresse mail <span style="color: red">*</span></label>
          <input type="email" name="email" placeholder="Entrer votre adresse mail" required />
        </div>

        <div class="input-box">
            <label>Mot de passe <span style="color: red">*</span></label>
          <input type="password" name="password" placeholder="Entrer votre mot de passe" required />
        </div>

        <div class="input-box">
          <label>Confirmer mot de passe <span style="color: red">*</span></label>
          <input type="password" name="password_confirmation" placeholder="Confirmer votre mot de passe" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Numero Telephone <span style="color: red">*</span></label>
            <input type="tel"  name="numero_telephone" required />
          </div>
          <div class="input-box">
            <label>Date naissance</label>
            <input type="date" name="date_naissance" placeholder="Entrer votre date naissance"/>
          </div>
        </div>
        <br>
        <label>Genre</label>
        <div class="select-box">
            <select name="sexe">
                    <option hidden value="Genre">Genre</option>
                    <option value="male">Male</option>
                    <option value="female">Femelle</option>
            </select>
        </div>
        <br>
        <label>Ville <span style="color: red">*</span></label>
        <div class="select-box">
            <select name="lieu_residence">
                    <option hidden value="Ville">Ville</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Marrakech">Marrakech</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Fes">Fes</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Meknes">Meknes</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Kenitra">Kenitra</option>
                    <option value="Tetouan">Tetouan</option>
                    <option value="Temara">Temara</option>
                    <option value="Safi">Safi</option>
                    <option value="Mohammedia">Mohammedia</option>
                    <option value="Khouribga">Khouribga</option>
                    <option value="El Jadida">El Jadida</option>
                    <option value="Beni Mellal">Beni Mellal</option>
                    <option value="Ait Melloul">Ait Melloul</option>
                    <option value="Nador">Nador</option>
                    <option value="Dar Bouazza">Dar Bouazza</option>
                    <option value="Taza">Taza</option>
                    <option value="Settat">Settat</option>
                    <option value="Berrechid">Berrechid</option>
                    <option value="Khemisset">Khemisset</option>
                    <option value="Inezgane">Inezgane</option>
                    <option value="Ksar El Kebir">Ksar El Kebir</option>
                    <option value="Larache">Larache</option>
                    <option value="Guelmim">Guelmim</option>
                    <option value="Khenifra">Khenifra</option>
                    <option value="Berkane">Berkane</option>
                    <option value="Taourirt">Taourirt</option>
                    <option value="Bouskoura">Bouskoura</option>
                    <option value="Fquih Ben Salah">Fquih Ben Salah</option>
                    <option value="Dcheira El Jihadia">Dcheira El Jihadia</option>
                    <option value="Oued Zem">Oued Zem</option>
                    <option value="El Kelaa Des Sraghna">El Kelaa Des Sraghna</option>
                    <option value="Sidi Slimane">Sidi Slimane</option>
                    <option value="Errachidia">Errachidia</option>
                    <option value="Guercif">Guercif</option>
                    <option value="Oulad Teima">Oulad Teima</option>
                    <option value="Ben Guerir">Ben Guerir</option>
                    <option value="Tifelt">Tifelt</option>
                    <option value="Lqliaa">Lqliaa</option>
                    <option value="Taroudant">Taroudant</option>
                    <option value="Sefrou">Sefrou</option>
                    <option value="Essaouira">Essaouira</option>
                    <option value="Fnideq">Fnideq</option>
                    <option value="Sidi Kacem">Sidi Kacem</option>
                    <option value="Tiznit">Tiznit</option>
                    <option value="Tan-Tan">Tan-Tan</option>
                    <option value="Ouarzazate">Ouarzazate</option>
                    <option value="Souk El Arbaa">Souk El Arbaa</option>
                    <option value="Youssoufia">Youssoufia</option>
                    <option value="Lahraouyine">Lahraouyine</option>
                    <option value="Martil">Martil</option>
                    <option value="Ouazzane">Ouazzane</option>
                    <option value="Benslimane">Benslimane</option>
                    <option value="Al Hoceima">Al Hoceima</option>
                    <option value="M'diq">M'diq</option>
                    <option value="Skhirate">Skhirate</option>
                    <option value="Ouad Tmam">Ouad Tmam</option>
                    <option value="Souk Larbaa">Souk Larbaa</option>
                    <option value="Taliouine">Taliouine</option>
                    <option value="Sidi Bennour">Sidi Bennour</option>
                    <option value="Midelt">Midelt</option>
                    <option value="Azrou">Azrou</option>
                    <option value="Drargua">Drargua</option>
                    <option value="Tafraout">Tafraout</option>
                    <option value="Skhour Rehamna">Skhour Rehamna</option>
                    <option value="Ouazzane">Ouazzane</option>
                    <option value="Beni Ansar">Beni Ansar</option>
                    <option value="Ain Harrouda">Ain Harrouda</option>
                    <option value="Tahala">Tahala</option>
                    <option value="Zag">Zag</option>
                    <option value="Sidi Yahya El Gharb">Sidi Yahya El Gharb</option>
                    <option value="Zaio">Zaio</option>
                    <option value="Asilah">Asilah</option>
                </select>
        </div>
        <button>S'inscrire</button>
      </form>
    </section>
  </body>
</html>