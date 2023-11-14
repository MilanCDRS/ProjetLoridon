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
    $r;
    foreach(GetRegions() as $reg){
        if($reg->code == $code)
        {
            $r = $reg;
        }
    }
    return $r;
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
    $departement;
    foreach(GetDepartementByNumero() as $dep){
        if($dep->numero == $numero)
        {
            $departement = $dep;
        }
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
            $dep = new Type($res['code'], $res['type']);
            array_push($deparetements, $dep);
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
    $type;
    foreach(GetDepartementByNumero() as $t){
        if($t->code == $code)
        {
            $type = $t;
        }
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

?>