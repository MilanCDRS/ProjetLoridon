<?php 

// en fct de l'action, revoie sur les autres controlleurs
function ctrlPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "menu.php";
    //$lesActions["liste"] = "listeRestos.php";
    //$lesActions["connexion"] = "connexion.php";
    //$lesActions["deconnexion"] = "deconnexion.php";
    //$lesActions["recherche"] = "rechercheResto.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>