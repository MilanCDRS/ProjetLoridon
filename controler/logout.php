<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/authBDD.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage
// traitement si necessaire des donnees recuperees
logout();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include "$racine/view/header.php";
include "$racine/view/viewLogout.php";
include "$racine/view/footer.php";
?>
