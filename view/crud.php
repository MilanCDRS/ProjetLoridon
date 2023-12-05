<?php 
  // si pas co (as Admin)
  // renvoie a l'acceuil
  //if(!isLoggedOn())
  //  header("location:index.php");
?>

<H1>Bienvenue dans le CRUD!</H1>

<form method="POST">
    <div>
      <label for="libelle">Nom :</label>
      <input type="text" id="libelle" name="libelle" value="<?php echo $spe->lib?>" required></input>
    </div>
    <div>
        <label for="departement">Département :</label>
        <select id="departement" name="departement" required>
            <option value="">-- Sélectionnez le département --</option>
            <?php 
            foreach($lesDeps as $d){
              echo "<option value=$d->numero";
              if($d->numero == $spe->departement->numero)
                echo " selected";
              echo ">$d->numero - $d->nom</option>";
            }
            ?>
        </select>
    </div>    
    <div>
        <label for="type">Type :</label>
        <select id="type" name="type" required>
            <option value="">-- Sélectionnez le type --</option>
            <?php 
            foreach($lesTypes as $t){
              echo "<option value=$t->code";
              if($t->code == $spe->type->code)
                echo " selected";
              echo ">$t->type</option>";
            }
            ?>
        </select>
    </div>
    <div>
      <label for="ingredients">Ingrédients :</label>
      <textarea id="ingredients" name="ingredients" required><?php echo $spe->ingredients?></textarea>
    </div>
    <div>
      <label for="description">Description :</label>
      <textarea id="description" name="description" required><?php echo $spe->description?></textarea>
    </div>
    <div>
      <label for="image">Image :</label>
      <input type="file" id="image" name="image" accept="image/*">
    </div>
    <div>
      <input name=addSpe type="submit" value="Ajouter">
      <input name=modifSpe type="submit" value="Modifier">
      <input name=delSpe type="submit" value="Supprimer">
    </div>
  </form>

  <?php 
    if (isset($_POST["addSpe"])) {
      // Récupération des valeurs du formulaire        
      $libelle =       ($_POST['libelle']);
      $departement =   ($_POST['departement']);
      $type =          ($_POST['type']);
      $ingredients =   ($_POST['ingredients']);
      $description =   ($_POST['description']);

      $departement = GetDepartementByNumero($departement);
      $type = GetTypeByCode($type);

      // FAIRE TEST VIDE ET TEST INJECTION SCRIPT OU HTML OU SQL

      $spe->lib =         $libelle;
      $spe->departement = $departement;
      $spe->type =        $type;
      $spe->ingredients = $ingredients;
      $spe->description = $description;

      AjouterSpecialite($spe);
    }

    if (isset($_POST["modifSpe"])) {
        // Récupération des valeurs du formulaire        
        $libelle =       ($_POST['libelle']);
        $departement =   ($_POST['departement']);
        $type =          ($_POST['type']);
        $ingredients =   ($_POST['ingredients']);
        $description =   ($_POST['description']);

        $departement = GetDepartementByNumero($departement);
        $type = GetTypeByCode($type);

        // FAIRE TEST VIDE ET TEST INJECTION SCRIPT OU HTML OU SQL

        $spe->lib =         $libelle;
        $spe->departement = $departement;
        $spe->type =        $type;
        $spe->ingredients = $ingredients;
        $spe->description = $description;

        ModifierSpecialite($spe);

        //reste a gerer l'image en PNG
        // il faut supprimer (archiver ?) l'ancienne image
        // La nouvelle image :
        // La renomer par l'id de la specialite et rappeller la fonction $spe->GetUrlImg();
    }  

    if(isset($_POST["delSpe"])){
      DeleteSpecialite($spe);
    }
  ?>