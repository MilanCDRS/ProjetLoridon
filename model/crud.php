<?php 

function DeleteSpecialite(Specialite $spe){
    try {
        $req = $cnx->prepare("DELETE FROM specialite WHERE id = $spe->id");
        $req->execute();
    } catch (PDOException $e) {
        die();
    } 
}

function ModifierSpecialite(Specialite $spe){
    try {
        $req = $cnx->prepare("UPDATE specialite SET 
        numeroDep='".$spe->departement->numero."', 
        lib='$spe->lib', 
        codeType=$spe->type->code, 
        ingredients='$spe->ingredients', 
        description='$spe->description' 
        WHERE id = $id");
        $req->execute();
    } catch (PDOException $e) {
        die();
    } 
}

function AjouterSpecialite(Specialite $spe){
    try {
        $req = $cnx->prepare("INSERT INTO specialite (numeroDep, lib, codeType, ingredients, description) 
        VALUES ('$spe->departement->numero', '$spe->lib', '$spe->type->code', '$spe->ingredients', $spe->description')");
        $req->execute();
    } catch (PDOException $e) {
        die();
    } 
}

?>