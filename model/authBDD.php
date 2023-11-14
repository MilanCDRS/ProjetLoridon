<?php

include_once "userBDD.php";

function login($idU, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByIdU($idU);
    $mdpBD = $util["mdp"];
    $mail = $util["mail"];
    $pseudo = $util["pseudo"];
    $dateInscription = $util["dateInscription"];

    //if (trim($mdpBD) == trim(crypt($idU, $mdpBD))) {
    if (trim($mdpBD) == trim($idU, $mdpBD)) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["idU"] = $idU;
        $_SESSION["mdpU"] = $mdpBD;
    }
    //var_dump($_SESSION);
    var_dump($_SESSION);
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["idU"]);
    unset($_SESSION["mdpU"]);
}

function getIdULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["idU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["idU"])) {
        $util = getUtilisateurByIdU($_SESSION["idU"]);
        if ($util["idU"] == $_SESSION["idU"] && $util["idU"] == $_SESSION["idU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    // test de connexion
    if (isLoggedOn()) {
        echo "logged\n";
    } else {
        echo "not logged\n";
    }
    
    login("test@bts.sio", "sio");
    
    if (isLoggedOn()) {
        echo "logged\n";
    } else {
        echo "not logged\n";
    }

    $id=getIdULoggedOn();
    echo "utilisateur connecté avec cette adresse : $id \n";
    
    // deconnexion
    logout();
}
?>