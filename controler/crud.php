<?php 
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include "model/specialites.php";
include "model/crud.php";

include "$racine/view/header.php";
include "$racine/view/crud.php";
include "$racine/view/footer.php";
?>