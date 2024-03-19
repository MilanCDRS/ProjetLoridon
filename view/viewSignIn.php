<div class="middleelement">
  <p class="signintxt">Vous souhaitez vous souvenir de vos victuailles préférées ? </p>
  <p class="signinintxt">Celles qui font la fierté de votre terroir et le bonheur de vos papilles ? </p>
<<<<<<< HEAD
  <p class="signinintxt"><b>Créez un compte</b> sur note site La bouffe de là-bas et ces pouvoirs seront votre :</p>

  <ul class="signinlisttxt">
    <li>Alimenter votre parchemin de favoris</li>
    <li>Graver un commentaire</li>
    <li>Évaluer les mets dont vous aimez (ou non !) vous repaître</li>

=======
  <p class="signinintxt"><b>Créez un compte</b> sur note site <span class="labas">La bouffe de là-bas</span> et ces pouvoirs seront votre :</p>

  <ul class="signinlisttxt">
    <li>Alimenter votre parchemin de <b>favoris</b></li>
    <li><b>Évaluer</b> les mets dont vous aimez (ou non !) vous repaître</li>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
  </ul>

  <h3 class="signintitle">Inscription</h3>


  <hr>

  <!-- a changer vers login-->
  <form action="./?action=signin" method="POST" class="form-auth">
    <div class="form-auth">
<<<<<<< HEAD
      <label for="pseudo">Pseudo: </label>
      <input type="pseudo" name="pseudo" id="pseudo" required />
    </div>
    <div class="form-auth">
      <label for="submail">mail: </label>
      <input type="submail" name="submail" id="submail" required />
    </div>
    <div class="form-auth">
      <label for="submailconf">Confirmation mail: </label>
=======
      <label for="pseudo">Pseudodyme : </label>
      <input type="pseudo" name="pseudo" id="pseudo" required />
    </div>
    <div class="form-auth">
      <label for="submail">Courriel : </label>
      <input type="submail" name="submail" id="submail" required />
    </div>
    <div class="form-auth">
      <label for="submailconf">Confirmation du Courriel : </label>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
      <input type="submailconf" name="submailconf" id="submailconf" required />
    </div>
    <div class="form-auth">
      <label for="submdp">Mot de passe: </label>
<<<<<<< HEAD
      <input type="submdp" name="submdp" id="submdp" required />
    </div>
    <div class="form-auth">
      <label for="submdpconf">Confirmation Mot de passe: </label>
      <input type="submdpconf" name="submdpconf" id="submdpconf" required />
=======
      <input type="password" name="submdp" id="submdp" required />
    </div>
    <div class="form-auth">
      <label for="submdpconf">Confirmation du Mot de passe: </label>
      <input type="password" name="submdpconf" id="submdpconf" required />
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
    </div>
    <?php if($res!=""){?>
    <p><?php echo($res) ?></p>
    <?php } ?>
    <div class="form-auth">
      <input type="submit" value="S'inscrire" />
    </div>
  </form>

<<<<<<< HEAD
  <p>inscrit ?</p>
  <a href="./?action=login">Connexion</a>
=======
  <p>Vous possédez déja un compte ?</p>
  <a href="./?action=login" class="btnAuth">Se Connecter</a>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
</div>
