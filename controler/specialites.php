<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "model/specialites.php";

$lesSpecialites = GetSpecialites();

include "view/header.php";
include "view/carte.html";
include "view/specialites.php";
include "view/footer.php";
?>