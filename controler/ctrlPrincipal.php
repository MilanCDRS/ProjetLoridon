<?php 

// include toutes les classes
include_once "$racine/model/authBDD.php"; //Pour utiliser isLoggedOn()
include_once "$racine/model/cnxBDD.php";
include_once "$racine/classes/Departement.php";
include_once "$racine/classes/Favori.php";
include_once "$racine/classes/Region.php";
<<<<<<< HEAD
include_once "$racine/classes/Specialite.php";
include_once "$racine/classes/Type.php";
include_once "$racine/classes/User.php";
include_once "$racine/classes/Note.php";
=======
include_once "$racine/classes/Note.php";
include_once "$racine/classes/Specialite.php";
include_once "$racine/classes/Type.php";
include_once "$racine/classes/User.php";
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e

// en fct de l'action, revoie sur les autres controlleurs
function ctrlPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "specialites.php";
    $lesActions["specialites"] = "specialites.php";
<<<<<<< HEAD
	  $lesActions["login"] = "login.php";
=======
	$lesActions["login"] = "login.php";
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
    $lesActions["crud"] = "crud.php";
    $lesActions["logout"] = "logout.php";
    $lesActions["star"] = "star.php";
    $lesActions["signin"] = "signin.php";


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}