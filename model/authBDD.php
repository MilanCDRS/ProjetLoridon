<?php

include_once "userBDD.php";

function login($mailU,$mdpU) {
    $salt="bouffe";
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
        var_dump($util);
        // le user a été retrouvé 
        if(!$util==false){
            // le mot de passe est celui de l'utilisateur dans la base de donnees
            if(trim($util["mdp"])==trim(crypt($mdpU, $salt))){
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
//vérifie si il y a des données a inscrire, les valides, puis appèle la fonction inserUser.
//Retourne un message string de retour (une confirmation ou une Erreur)
function signIn($pseudoU, $mailU, $mailconfU, $mdpU, $mdpconfU){
    $salt="bouffe";
    //ca marche pas si la variable est défini hors fonction donc bon ¯\_(ツ)_/¯ 
    $res="";
    //vérif contenue
    if(!($pseudoU==''||$mdpU==''||$mailconfU==''||$mdpU==''||$mdpconfU=='')){
        $res=signInValidator($pseudoU, $mailU, $mailconfU, $mdpU, $mdpconfU);
        if($res=="valid"){
            $insertres=insertUser($pseudoU, $mailU, trim(crypt($mdpU, $salt)));
            if($insertres){
                $res="Utilisateur Inscrit";
            } else $res="ERR Echec Insersion";
        }
    }
    return $res;
}

/*vérifie si la proposition d'inscription est valide
Les tests performé sont:
1. Si l'utilisateur a un pseudo original
2. si le mail est identique a la confirmation mail
3. si le mot de passe est de plus de 12 charactères
4. si le mot de passe est identique avec la confirmation mot de passe
5. si le mail est original.

Retourne un message string de retour (une confirmation ou une Erreur)
*/
function signInValidator($pseudoU, $mailU, $mailconfU, $mdpU, $mdpconfU){
    if(!getUtilisateurByPseudo($pseudoU)){
        if($mailU==$mailconfU){
            if($mdpU==$mdpconfU){
                if(strlen($mdpU)>12){
                    if(!getUtilisateurBymailU($mailU)){
                        $res="valide";
                    } else $res="Le mail est déja utilisé!";
                } else $res="Le mot de passe doit dépasser 12 charactères!";
            } else $res="Les mots de passe ne sont pas identiques!";
        } else $res="Les mails ne sont pas identiques!";
    } else $res="Le pseudo est déja utilisé !";
    return $res;
}
?>