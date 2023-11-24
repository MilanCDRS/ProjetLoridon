<?php 

// include toutes les classes
include_once "$racine/model/authBDD.php"; //Pour utiliser isLoggedOn()
include_once "$racine/model/cnxBDD.php";
include_once "$racine/classes/Departement.php";
include_once "$racine/classes/Favori.php";
include_once "$racine/classes/Region.php";
include_once "$racine/classes/Specialite.php";
include_once "$racine/classes/Type.php";
include_once "$racine/classes/User.php";
include_once "$racine/authBDD.php";

// en fct de l'action, revoie sur les autres controlleurs
function ctrlPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "specialites.php";
    $lesActions["specialites"] = "specialites.php";
	$lesActions["login"] = "login.php";
    $lesActions["crud"] = "crud.php";
    $lesActions["logout"] = "logout.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}