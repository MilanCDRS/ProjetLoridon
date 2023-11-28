<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/authBDD.php";


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

//Fonction inscription

// appel du script de vue
$titre = "authentification";
include "$racine/view/header.php";
include "$racine/view/viewSubscribe.php";
include "$racine/view/footer.php";

?>