<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "model/specialites.php";

$lesSpecialites;
$libTitre = "Liste des Spécialités";
// recupere 
if(isset($_GET['r']))
{
    $idReg = $_GET['r']; 
    $reg = GetRegionByCode($idReg);
    $lesSpecialites = GetSpecialitesByRegion($reg);
    $libTitre = "Liste des Spécialités de la Région : $reg->libelle";
}else{
    $lesSpecialites = GetSpecialites();
}

include "view/header.php";
include "view/carte.php";
include "view/specialites.php";
include "view/footer.php";
?>