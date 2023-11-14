<?php 

// Recupére toutes les specialités de la base de donnée
function GetSpecialites(){
    $lesSpecialites = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select id, numero, lib, codeType, ingredients, description FROM Specialite;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $spe = new Specialite($res['id'], $res['numero'], $res['lib'], $res['codeType'], $res['ingredients'], $res['description']);
            array_push($lesSpecialites, $spe); // ajoute le nouvelle spe dans la liste
            //$resultat[] = $ligne;
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        echo 'oops';
    }

    return $lesSpecialites;
}

?>