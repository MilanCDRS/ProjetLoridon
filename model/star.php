<?php 

function GetNotes($idSpecialite){
    $notes = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select identUser, note FROM Note WHERE idSpecialite = :idSpecialite;");
        $req->bindValue(':idSpecialite', $idSpecialite, PDO::PARAM_STR);
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $n = new Note($res['identUser'], $idSpecialite, $res['note']);
            array_push($notes, $n);
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $notes;
}

function GetNotesUser($identUser){
    $notes = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select idSpecialite, note FROM Note WHERE identUser = :identUser;");
        $req->bindValue(':identUser', $identUser, PDO::PARAM_STR);
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $n = new Note($identUser, $res['idSpecialite'], $res['note']);
            array_push($notes, $n);
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $notes;
}

function InsertNote(Note $note){
    try {
        $idUser = $note->identUser;
        $idSpe = $note->idSpecialite;
        $n = $note->note;

        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO note VALUES ($idUser, $idSpe, $n);");
        $req->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    } 
}

function UpdateNote(Note $note){
    try {
        $idUser = $note->identUser;
        $idSpe = $note->idSpecialite;
        $n = $note->note;

        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE note SET 
        note='$n'
        WHERE identUser = $idUser AND idSpecialite = $idSpe");
        $req->execute();
    } catch (PDOException $e) {
        die();
    } 
}

function alreadyVoted($identUser,$idSpecialite){
    $bo = false;
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select note FROM note WHERE idSpecialite = :idSpecialite AND identUser = :identUser");
        $req->bindValue(':identUser', $identUser, PDO::PARAM_STR);
        $req->bindValue(':idSpecialite', $idSpecialite, PDO::PARAM_STR);
        $req->execute();
        if ($req->rowCount() > 0){
            $bo = true;
        }
    }
    catch (PDOException $e)
    {

    }
    return $bo;
}

?>