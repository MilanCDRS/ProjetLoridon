<H1>Bienvenue dans le CRUD!</H1>

<form action="modifSpe" method="POST">
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
      <input type="submit" value="Envoyer">
    </div>
  </form>

  <?php 
    if (isset($_POST["modifSpe"])) {
        // Récupération des valeurs du formulaire        
        $libelle = $_POST['libelle'];
        $departement = $_POST['departement'];
        $type = $_POST['type'];
        $ingredients = $_POST['ingredients'];
        $description = $_POST['description'];
    
        // Traitement des valeurs récupérées (par exemple, affichage)
        echo "Département : " . $departement . "<br>";
        echo "Libellé : " . $libelle . "<br>";
        echo "Type : " . $type . "<br>";
        echo "Ingrédients : " . $ingredients . "<br>";
        echo "Description : " . $description . "<br>";
    
        // Pour l'image, vous pouvez gérer l'upload de fichier ici
        // $_FILES['image'] contiendra les informations sur le fichier téléchargé
        // Par exemple, vous pouvez utiliser move_uploaded_file() pour déplacer le fichier vers un emplacement spécifique sur votre serveur
        // Exemple :
        // $fileTmpPath = $_FILES['image']['tmp_name'];
        // $fileName = $_FILES['image']['name'];
        // $uploadDirectory = 'uploads/'; // Répertoire de destination
        // move_uploaded_file($fileTmpPath, $uploadDirectory . $fileName);
    }  
  ?>