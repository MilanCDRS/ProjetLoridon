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

//fonction d'inscription
function signIn($pseudoU, $mailU, $mailconfU, $mdpU, $mdpconfU){
    echo("test");
    $res="";
    //vérif contenue
    if(!($pseudoU==''||$mdpU==''||$mailconfU==''||$mdpU==''||$mdpconfU=='')){
        echo("test1");
        if($mailU==$mailconfU){
            echo("test2");
            if($mdpU==$mdpconfU){
                echo("test3");
                if(strlen($mdpU)>12){
                    echo("test4");
                    $util=getUtilisateurBymailU($mailU);
                    if($util==false){
                        echo("test5");
                        //C'est pas très lisible, je metterais tous ces tests dans leurs propres fonctions plus tard.
                        insertUser($pseudoU, $mailU, $mdpU);
                        //fonction userBDD inscription
                        //Si réussi, connexion
                    } else $res="Le mail est déja utilisé!";
                } else $res="Le mot de passe doit dépasser 12 charactères!";
            } else $res="Les mots de passe ne sont pas identique!";
        } else $res="Les mail ne sont pas identique!";
    }
    return $res;
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