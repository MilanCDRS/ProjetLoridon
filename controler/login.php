<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/authBDD.php";

// creation du menu burger
//$menuBurger = array();
//$menuBurger[] = Array("url"=>"./?action=connexion","label"=>"Connexion");
//$menuBurger[] = Array("url"=>"./?action=inscription","label"=>"Inscription");

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mail"]) && isset($_POST["mdp"])){
    $mailU=$_POST["mail"];
    $mdpU=$_POST["mdp"];
}
else
{
    $mailU="";
    $mdpU="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
$check=login($mailU,$mdpU);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    //include "$racine/controleur/monProfil.php";
    $titre = "confirmation";
    include "$racine/view/header.php";
    include "$racine/view/viewConfirmedAuth.php";
    include "$racine/view/footer.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "authentification";
    include "$racine/view/header.php";
    include "$racine/view/viewAuth.php";
    include "$racine/view/footer.php";
}

?>