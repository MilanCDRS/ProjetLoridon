<div class="middleelement">
  <?php if(isset($check) && $check==2){ ?>
    <p>La connexion a échouée</p>
  <?php } ?>

  <h2 class="login title">Welcome Heaume</h2>
  <img class="home" src="images/icons/BlackWhiteIcons/Bknight.png">

  <h3 class="login title">Connexion</h3>

  <hr>

  <form action="./?action=login" method="POST" class="form-auth">
    <div class="form-auth">
      <label for="mail">Courriel : </label>
      <input type="mail" name="mail" id="mail" required />
    </div>
    <div class="form-auth">
      <label for="mdp">Mot de passe : </label>
      <input type="password" name="mdp" id="mdp" required />
    </div>
    <div class="form-auth">
      <input type="submit" value="Valider" />
    </div>
  </form>

  <p>Vous ne possédez pas de compte ?</p>
  <a href="./?action=signin" class="btnAuth">S'inscrire</a>
<!--
  <hr>

  Utilisateur de test : <br />
  login : test@bts.sio<br />
  mot de passe : siosiosiosiosio <br />
</div>
  -->