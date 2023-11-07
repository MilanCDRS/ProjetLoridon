<?php 
include "getRacine.php";
include "$racine/controlleur/ctrlPrincipal.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{    
    $action = "defaut";
}

$fichier = ctrlPrincipal($action);
include "$racine/controlleur/$fichier";
?>