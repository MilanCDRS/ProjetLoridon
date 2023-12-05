<?php

include_once "userBDD.php";

function login($mailU,$mdpU) {
    //0: pas de connexion
    //1: connexion réussi 
    //2: connexion raté
    $ret=0;
    if(!($mailU==''||$mdpU=='')){
        $ret=2;
        if (!isset($_SESSION)) {
            session_start();
        }
    
        $util = getUtilisateurBymailU($mailU);
        // le user a été retrouvé 
        if(!$util==false){
            // le mot de passe est celui de l'utilisateur dans la base de donnees
            if($util["mdp"]==$mdpU){
                $idU= $util["ident"];
                $mdpBD = $util["mdp"];
                $mailBD = $util["mail"];
                $pseudoU = $util["pseudo"];
                $dateInscription = $util["dateInscription"];
                $adminU=$util["admin"];
            
                //if (trim($mdpBD) == trim(crypt($idU, $mdpBD)))
                // le mot de passe est celui de l'utilisateur dans la base de donnees
                $_SESSION["idU"] = $idU;
                $_SESSION["mailU"] = $mailBD;
                $_SESSION["mdpU"] = $mdpBD;
                $_SESSION["pseudoU"] = $pseudoU;
                $_SESSION["dateInscription"] = $dateInscription;
                $_SESSION["admin"]=$adminU;
                $ret=1;
            }
        }
    }
    return $ret;
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["mailU"]);
    unset($_SESSION["mdpU"]);
    unset($_SESSION["pseudoU"]);
    unset($_SESSION["dateInscription"]);
    unset($_SESSION["admin"]);
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

//Ditto IsloggedOn mais n'envoie true que si l'utilisateur est admin
function isLoggedOnAsAdmin() {
    $ret = false;
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION["mailU"])) {
        $util = getUtilisateurByIdU($_SESSION["idU"]);
        if ($util["mail"] == $_SESSION["mailU"] && $util["mdp"] == $_SESSION["mdpU"] && $_SESSION["admin"]==true) 
        {
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