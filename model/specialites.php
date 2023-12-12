<?php 

// Recupére toutes les Regions
function GetRegions(){
    $regions = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetRegions;");
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
        $ERRmsg="ERR Region DB fail";
        header("Location: view/404.php");
    }

    return $regions;
}

// Recupere la region en fct de son code
function GetRegionByCode($code){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetRegionByCode($code);");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $region = new Region($res['code'], $res['libelle']);
    } catch (PDOException $e) {
        die();
    }
    return $region;
}

// Recupere la region en fct de son nom
function GetRegionByNom($libelle){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetRegionByNom('$libele');");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $region = new Region($res['code'], $res['libelle']);
    } catch (PDOException $e) {
        $ERRmsg="ERR Region Nom DB fail";
        header("Location: view/404.php");
    }
    return $region;
}

// Recupére toutes les Departements
function GetDepartements(){
    $deparetements = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetDepartements();");
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
        $ERRmsg="ERR Departement DB fail";
        header("Location: view/404.php");
    }

    return $deparetements;
}

// Recupere la departements en fct de son code
function GetDepartementByNumero($numero){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetDepartementByNumero('$numero');");
        $req->execute();

        $res = $req->fetch(PDO::FETCH_ASSOC);
        $region = GetRegionByCode($res['codeRegion']);
        $departement = new Departement($res['numero'], $region, $res['nom']);
    } catch (PDOException $e) {
        $ERRmsg="ERR Departement Num DB fail";
        header("Location: view/404.php");
    }
    return $departement;
}

// Recupére toutes les types
function GetTypes(){
    $types = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetType();");
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
        $ERRmsg="ERR Types DB fail";
        header("Location: view/404.php");
    }

    return $types;
}

// Recupere la type en fct de son code
function GetTypeByCode($code){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetTypeByCode($code)");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);

        $type = new Type($res['code'], $res['type']);
    } catch (PDOException $e) {
        $ERRmsg="ERR get type code DB fail";
        header("Location: view/404.php");
        //die();
    }
    return $type;
}



// Recupére toutes les specialités de la base de donnée
function GetSpecialites(){
    $lesSpecialites = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetSpecialites();");
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
        $ERRmsg="ERR Specialites DB fail";
        header("Location: view/404.php");
        //
    }

    return $lesSpecialites;
}

// Recupére la spe avec son id
function GetSpecialiteById($id){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetSpecialiteById($id);");
        $req->execute();
        $res = $req->fetch(PDO::FETCH_ASSOC);
        
        $dep = GetDepartementByNumero($res['numeroDep']);
        $type = GetTypeByCode($res['codeType']);
        $spe = new Specialite($res['id'], $dep, $res['lib'], $type, $res['ingredients'], $res['description']);
    } catch (PDOException $e) {
        $ERRmsg="ERR Specialite by ID DB fail";
        header("Location: view/404.php");
    }
    return $spe;
}

// Recupére toutes les specialités par region
function GetSpecialitesByRegion(Region $region){
    $lesSpecialites = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("call GetSpecialitesByRegion($region->code);");
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
        $ERRmsg="ERR Specialite Region DB fail";
        header("Location: view/404.php");
    }

    return $lesSpecialites;
}

?>