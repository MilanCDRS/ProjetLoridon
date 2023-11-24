<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "model/specialites.php";
include "model/crud.php";

$spe = new Specialite();
if(isset($_GET['crud']))
{
    $idSpe = $_GET['crud']; 
    $spe = GetSpecialiteById($idSpe);
}

$lesTypes = GetTypes();
$lesDeps = GetDepartements();

include "$racine/view/header.php";
include "$racine/view/crud.php";
include "$racine/view/footer.php";
?>