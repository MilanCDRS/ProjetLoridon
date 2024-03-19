<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "model/star.php";
include_once "model/specialites.php";

include "view/header.php";
include "view/footer.php";

// Affiche toutes les spécialités
$spe;
$lesSpecialites;
$libTitre = "Liste des Spécialités";

// recupere toutes les specialites de la region
if(isset($_GET['r']))
{
    //fonction Cache
    if(!isset($lesSpecialites)){
        $idReg = $_GET['r']; 
        $reg = GetRegionByCode($idReg);
        $lesSpecialites = GetSpecialitesByRegion($reg);
        $libTitre = "Liste des Spécialités de la Région : $reg->libelle";
    }
    else{
        $idReg = $_GET['r']; 
        $libTitre = "Liste des Spécialités de la Région : $reg->libelle";
    }
    include "view/carte.php";
    include "view/specialites.php";
}

// Affiche une seule spécialité
else if(isset($_GET['s']))
{
    $idSpe = $_GET['s']; 
    $spe = GetSpecialiteById($idSpe);
    include "view/voirSPE.php";
    // include "view/footer.php";
}
else{
    $lesSpecialites = GetSpecialites();    
    include "view/carte.php";
    include "view/specialites.php";
}


include "view/footer.php";
//include "view/footer.php";
