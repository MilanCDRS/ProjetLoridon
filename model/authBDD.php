<?php

include_once "userBDD.php";

function login($mailU,$mdpU) {
    if(!($mailU==''||$mdpU=='')){
        if (!isset($_SESSION)) {
            session_start();
        }
    
        $util = getUtilisateurBymailU($mailU);
        $idU= $util["ident"];
        $mdpBD = $util["mdp"];
        $mailBD = $util["mail"];
        $pseudoU = $util["pseudo"];
        $dateInscription = $util["dateInscription"];
    
        //if (trim($mdpBD) == trim(crypt($idU, $mdpBD))) {
            // le mot de passe est celui de l'utilisateur dans la base de donnees
            $_SESSION["idU"] = $idU;
            $_SESSION["mailU"] = $mailBD;
            $_SESSION["mdpU"] = $mdpBD;
            $_SESSION["pseudoU"] = $pseudoU;
            $_SESSION["dateInscription"] = $dateInscription;
        //}
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mailU"]);
    unset($_SESSION["mdpU"]);
    unset($_SESSION["pseudoU"]);
    unset($_SESSION["dateInscription"]);
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
    $ret = false;
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION["mailU"])) {
        $util = getUtilisateurByIdU($_SESSION["idU"]);
        if ($util["mail"] == $_SESSION["mailU"] && $util["mdp"] == $_SESSION["mdpU"]
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
    
    login("test@bts.sio", "siosiosiosiosio");
    
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