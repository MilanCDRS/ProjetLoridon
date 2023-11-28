<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/authBDD.php";


// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["submail"]) && isset($_POST["submailconf"]) && isset($_POST["pseudo"]) && isset($_POST["submdp"]) && isset($_POST["submdpconf"])){
    $pseudoU=$_POST["pseudo"];
    $mailU=$_POST["submail"];
    $mailconfU=$_POST["submailconf"];
    $mdpU=$_POST["submdp"];
    $mdpconfU=$_POST["submdpconf"];
    //Fonction Inscription
}
else{
    $pseudoU="";
    $mailU="";
    $mailconfU="";
    $mdpU="";
    $mdpconfU="";
}

//Fonction inscription
$res=signIn($pseudoU, $mailU, $mailconfU, $mdpU, $mdpconfU);


// appel du script de vue
$titre = "authentification";
include "$racine/view/header.php";
include "$racine/view/viewSignIn.php";
include "$racine/view/footer.php";

?>