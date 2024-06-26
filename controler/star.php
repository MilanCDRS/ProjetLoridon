<?php 
// Include
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/model/star.php";

include_once "model/specialites.php";

// Variables
$speId;
$starId;
$userId = getIdULoggedOn();

// Script
if(isset($_GET['star']))
{
    $pieces = explode("_", $_GET["star"]); // Sépare l'ID de la spécialité et de l'étoile en fonction de l'underscore
    $speId = $pieces[0]; // Récupère l'id de la spécialité
    $starId = $pieces[1]; // Récupère l'id de l'étoile
    $nouvnote=0;
    $nbnotes=1;
    $spe = GetSpecialiteById($speId); // Récupère la spécialité
    $nlist=GetNotes($speId);
    foreach($nlist as $lanote){
        $nouvnote=$nouvnote+$lanote->note;
        $nbnotes=$nbnotes+1;
    }
    $nouvnote=($nouvnote+intval($starId))/$nbnotes;
    $n = new Note($userId, $speId, $nouvnote);
    include "view/header.php"; // Affiche le header
    include "view/voirSPE.php"; // Affiche la spé
    include "view/footer.php"; // Affiche le footer

    if (!alreadyVoted($userId,$speId)){
        InsertNote($n);
    }
    else {
        UpdateNote($n);
    }
}

?>
