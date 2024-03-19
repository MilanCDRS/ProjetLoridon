<div class="middleelement">
  <p class="signintxt">Vous souhaitez vous souvenir de vos victuailles préférées ? </p>
  <p class="signinintxt">Celles qui font la fierté de votre terroir et le bonheur de vos papilles ? </p>
  <p class="signinintxt"><b>Créez un compte</b> sur note site <span class="labas">La bouffe de là-bas</span> et ces pouvoirs seront votre :</p>

  <ul class="signinlisttxt">
    <li>Alimenter votre parchemin de <b>favoris</b></li>
    <li><b>Évaluer</b> les mets dont vous aimez (ou non !) vous repaître</li>
  </ul>

  <h3 class="signintitle">Inscription</h3>


  <hr>

  <!-- a changer vers login-->
  <form action="./?action=signin" method="POST" class="form-auth">
    <div class="form-auth">
      <label for="pseudo">Pseudodyme : </label>
      <input type="pseudo" name="pseudo" id="pseudo" required />
    </div>
    <div class="form-auth">
      <label for="submail">Courriel : </label>
      <input type="submail" name="submail" id="submail" required />
    </div>
    <div class="form-auth">
      <label for="submailconf">Confirmation du Courriel : </label>
      <input type="submailconf" name="submailconf" id="submailconf" required />
    </div>
    <div class="form-auth">
      <label for="submdp">Mot de passe: </label>
      <input type="password" name="submdp" id="submdp" required />
    </div>
    <div class="form-auth">
      <label for="submdpconf">Confirmation du Mot de passe: </label>
      <input type="password" name="submdpconf" id="submdpconf" required />
    </div>
    <?php if($res!=""){?>
    <p><?php echo($res) ?></p>
    <?php } ?>
    <div class="form-auth">
      <input type="submit" value="S'inscrire" />
    </div>
  </form>

  <p>Vous possédez déjà un compte ?</p>
  <a href="./?action=login" class="btnAuth">Se Connecter</a>
</div>
