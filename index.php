<?php 
include "getRacine.php";
include "$racine/controler/ctrlPrincipal.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{    
    $action = "defaut";
}

//CRUD
if(isset($_GET["crud"])){
    $action = "crud";
}

if(isset($_GET["star"])){
    $action = "star";
}

$fichier = ctrlPrincipal($action);
include "$racine/controler/$fichier";
?>