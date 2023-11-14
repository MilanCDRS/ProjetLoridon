<?php 
include "getRacine.php";
include "$racine/controler/ctrlPrincipal.php";
include_once "$racine/modele/authBDD.php"; //Pour utiliser isLoggedOn()

if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{    
    $action = "defaut";
}

$fichier = ctrlPrincipal($action);
include "$racine/controler/$fichier";
?>
