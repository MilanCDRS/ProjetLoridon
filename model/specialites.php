<?php 

// Recupére toutes les Regions
function GetRegions(){
    $regions = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select code, libelle FROM Region;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $region = new Region($res['code'], $res['libelle']);
            array_push($regions, $region);
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $regions;
}

// Recupere la region en fct de son code
function GetRegionByCode($code){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select code, libelle from region where code = '$code'");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $region = new Region($res['code'], $res['libelle']);
    } catch (PDOException $e) {
        die();
    }
    return $region;
}

// Recupere la region en fct de son nom
function GetRegionByNom($libele){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select code, libelle from region where libele = '$libele'");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $region = new Region($res['code'], $res['libelle']);
    } catch (PDOException $e) {
        die();
    }
    return $region;
}

// Recupére toutes les Departements
function GetDepartements(){
    $deparetements = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select numero, codeRegion, nom FROM Departement;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $region = GetRegionByCode($res['codeRegion']);
            $dep = new Departement($res['numero'], $region, $res['nom']);
            array_push($deparetements, $dep);
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $deparetements;
}

// Recupere la departements en fct de son code
function GetDepartementByNumero($numero){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select numero, codeRegion, nom from departement where numero = '$numero'");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        $region = GetRegionByCode($res['codeRegion']);
        $departement = new Departement($res['numero'], $region, $res['nom']);
    } catch (PDOException $e) {
        die();
    }
    return $departement;
}

// Recupére toutes les types
function GetTypes(){
    $types = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select code, type FROM Type;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $t = new Type($res['code'], $res['type']);
            array_push($types, $t);
            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $types;
}

// Recupere la type en fct de son code
function GetTypeByCode($code){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select code, type from type where code = '$code'");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $type = new Type($res['code'], $res['type']);
    } catch (PDOException $e) {
        die();
    }
    return $type;
}



// Recupére toutes les specialités de la base de donnée
function GetSpecialites(){
    $lesSpecialites = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select id, numeroDep, lib, codeType, ingredients, description FROM Specialite;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $dep = GetDepartementByNumero($res['numeroDep']);
            $type = GetTypeByCode($res['codeType']);
            $spe = new Specialite($res['id'], $dep, $res['lib'], $type, $res['ingredients'], $res['description']);
            array_push($lesSpecialites, $spe);

            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $lesSpecialites;
}

// Recupére la spe avec son id
function GetSpecialiteById($id){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select id, numeroDep, lib, codeType, ingredients, description FROM Specialite inner join departement on numeroDep = numero WHERE id = $id ;");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        $dep = GetDepartementByNumero($res['numeroDep']);
        $type = GetTypeByCode($res['codeType']);
        $spe = new Specialite($res['id'], $dep, $res['lib'], $type, $res['ingredients'], $res['description']);
    } catch (PDOException $e) {
        die();
    }
    return $spe;
}

// Recupére toutes les specialités par region
function GetSpecialitesByRegion(Region $region){
    $lesSpecialites = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("select id, numeroDep, lib, codeType, ingredients, description FROM Specialite inner join departement on numeroDep = numero WHERE codeRegion = $region->code ;");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        while ($res) {
            $dep = GetDepartementByNumero($res['numeroDep']);
            $type = GetTypeByCode($res['codeType']);
            $spe = new Specialite($res['id'], $dep, $res['lib'], $type, $res['ingredients'], $res['description']);
            array_push($lesSpecialites, $spe);

            $res = $req->fetch(PDO::FETCH_ASSOC);
        }
    }
    catch (PDOExeption $e)
    { 
        //echo 'oops';
    }

    return $lesSpecialites;
}

?>