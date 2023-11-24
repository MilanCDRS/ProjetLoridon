<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/authBDD.php";



// appel du script de vue
$titre = "authentification";
include "$racine/view/header.php";
include "$racine/view/viewSubscribe.php";
include "$racine/view/footer.php";

?>