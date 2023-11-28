<h2>Ceci est la page de inscription</h2>

<form action="./?action=login" method="POST" class="form-auth">
   <div class="form-auth">
    <label for="pseudo">Pseudo: </label>
    <input type="pseudo" name="pseudo" id="pseudo" required />
  </div>
  <div class="form-auth">
    <label for="submail">mail: </label>
    <input type="submail" name="submail" id="submail" required />
  </div>
  <div class="form-auth">
    <label for="submailconf">Confirmation mail: </label>
    <input type="submailconf" name="submailconf" id="submailconf" required />
  </div>
  <div class="form-auth">
    <label for="submdp">Mot de passe: </label>
    <input type="submdp" name="submdp" id="submdp" required />
  </div>
  <div class="form-auth">
    <label for="submdpconf">Confirmation Mot de passe: </label>
    <input type="submdpconf" name="submdpconf" id="submdpconf" required />
  </div>
  <div class="form-auth">
    <input type="submit" value="S'inscrire" />
  </div>
</form>

<p>inscrit ?</p>
<a href="./?action=login">Inscription</a>
