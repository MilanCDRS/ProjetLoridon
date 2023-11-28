<?php

include_once "cnxBDD.php";

function getUtilisateurs() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ident, mail, mdp, pseudo, dateInscription, admin from User");
        $req->execute();

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getUtilisateurByIdU($IdU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ident, mail, mdp, pseudo, dateInscription, admin from User where ident=:ident");
        $req->bindValue(':ident', $IdU, PDO::PARAM_STR);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getUtilisateurBymailU($mailU) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ident, mail, mdp, pseudo, dateInscription, admin from User where mail=:mail");
        $req->bindValue(':mail', $mailU, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        echo("testERR");
        die();
    }
    return $resultat;
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["mailU"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function insertUser($pseudoU, $mailU, $mdpU){
    //$resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into User (pseudo, mail, mdp) values('$pseudoU','$mailU','$mdpU');");
        //$req->bindValue(':pseudo', $pseudoU, PDO::PARAM_STR);
        //$req->bindValue(':mail', $mailU, PDO::PARAM_STR);
        //$req->bindValue(':mdp', $mdpU, PDO::PARAM_STR);
        var_dump($req);
        $req->execute();
        
        //$resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    //return $resultat;
}



if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUtilisateurs() : \n";
    print_r(getUtilisateurs());

    echo "getUtilisateurByIdU('???') : \n";
    print_r(getUtilisateurByIdU("???"));

}
?>