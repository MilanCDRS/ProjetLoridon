<?php 

// include toutes les classes
include_once "$racine/model/cnxBDD.php";
include "$racine/classes/Departement.php";
include "$racine/classes/Favori.php";
include "$racine/classes/Region.php";
include "$racine/classes/Specialite.php";
include "$racine/classes/Type.php";
include "$racine/classes/User.php";

// en fct de l'action, revoie sur les autres controlleurs
function ctrlPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "specialites.php";
    $lesActions["specialites"] = "specialites.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}

?>