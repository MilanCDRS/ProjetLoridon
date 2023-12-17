<div class="middleelement">
  <?php if(isset($check) && $check==2){ ?>
    <p>connexion fail</p>
  <?php } ?>

  <h2 class="login title">Welcome Heaume</h2>

  <h3 class="login title">Connexion</h3>

  <hr>

  <form action="./?action=login" method="POST" class="form-auth">
    <div class="form-auth">
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
<!--
  <hr>

  Utilisateur de test : <br />
  login : test@bts.sio<br />
  mot de passe : siosiosiosiosio <br />
</div>
  -->