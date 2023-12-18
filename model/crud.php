<?php 

function DeleteSpecialite(Specialite $spe){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("DELETE FROM specialite WHERE id = $spe->id");
        $req->execute();
    } catch (PDOException $e) {
        //die();
        $ERRmsg="ERR Delete DB fail";
        header("Location: view/404.php");
    } 
}

function ModifierSpecialite(Specialite $spe){
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("UPDATE specialite SET 
        numeroDep='".$spe->departement->numero."', 
        lib='$spe->lib', 
        codeType=".$spe->type->code.", 
        ingredients='$spe->ingredients', 
        description='$spe->description' 
        WHERE id = $spe->id");
        $req->execute();
    } catch (PDOException $e) {
        //die();
        $ERRmsg="ERR Modifier DB fail";
        header("Location: view/404.php");
    } 
}

function AjouterSpecialite(Specialite $spe){
    try {
        $numeroDep = $spe->departement->numero;
        $lib = $spe->lib;
        $codeType = $spe->type->code;
        $ingredients = $spe->ingredients;
        $description = $spe->description;

        $cnx = connexionPDO();
        $req = $cnx->prepare("INSERT INTO specialite (numeroDep, lib, codeType, ingredients, description) 
                                VALUES ('$numeroDep', '$lib', $codeType, '$ingredients', '$description')");
        $req->execute();
    } catch (PDOException $e) {
        //echo 'pb';
        //die();
        $ERRmsg="ERR Ajouter DB fail";
        header("Location: view/404.php");
    } 
}
?>