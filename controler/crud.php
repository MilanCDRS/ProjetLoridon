<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "model/specialites.php";
include_once "model/crud.php";

$spe = new Specialite("1000", GetDepartementByNumero("01"), "Nouvelle Spécialite", GetTypeByCode(1), "ingredients", "desciption");
if(isset($_GET['crud']))
{
    $idSpe = $_GET['crud']; 
    $spe = GetSpecialiteById($idSpe);
}

$lesTypes = GetTypes();
$lesDeps = GetDepartements();

include_once "$racine/view/header.php";
include_once "$racine/view/crud.php";
include_once "$racine/view/footer.php";
?>