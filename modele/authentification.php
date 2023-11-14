<?php

include_once "utilisateurBDD.php";

function login($pseudoU, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByPseudoU($pseudoU);
    $mdpBD = $util["mdpU"];

    if (trim($mdpBD) == trim(crypt($pseudoU, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["pseudoU"] = $pseudoU;
        $_SESSION["mdpU"] = $mdpBD;
    }
    //var_dump($_SESSION);
    var_dump($_SESSION);
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["pseudoU"]);
    unset($_SESSION["mdpU"]);
}

function getPseudoULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["pseudoU"];
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

    if (isset($_SESSION["pseudoU"])) {
        $util = getUtilisateurByPseudoU($_SESSION["pseudoU"]);
        if ($util["pseudoU"] == $_SESSION["pseudoU"] && $util["pseudoU"] == $_SESSION["pseudoU"]
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

    $mail=getMailULoggedOn();
    echo "utilisateur connecté avec cette adresse : $mail \n";
    
    // deconnexion
    logout();
}
?>