<div class="middleelement">
  <?php if(isset($check) && $check==2){ ?>
<<<<<<< HEAD
    <p>connexion fail</p>
  <?php } ?>

  <h2 class="login title">Welcome Heaume</h2>
=======
    <p>La connexion a échouée</p>
  <?php } ?>

  <h2 class="login title">Welcome Heaume</h2>
  <img class="home" src="images/icons/BlackWhiteIcons/Bknight.png">
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e

  <h3 class="login title">Connexion</h3>

  <hr>

  <form action="./?action=login" method="POST" class="form-auth">
    <div class="form-auth">
<<<<<<< HEAD
      <label for="mail">mail: </label>
      <input type="mail" name="mail" id="mail" required />
    </div>
    <div class="form-auth">
      <label for="mdp">Mot de passe: </label>
      <input type="mdp" name="mdp" id="mdp" required />
    </div>
    <div class="form-auth">
      <input type="submit" value="Envoyer" />
    </div>
  </form>

  <p>pas inscrit ?</p>
  <a href="./?action=signin">Inscription</a>
=======
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
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
<!--
  <hr>

  Utilisateur de test : <br />
  login : test@bts.sio<br />
  mot de passe : siosiosiosiosio <br />
</div>
  -->