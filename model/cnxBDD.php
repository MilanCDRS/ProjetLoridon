<?php
   
function connexionPDO() {
    $login = "occasauto";
    $mdp = "occasauto";
    $bd = "bouffe";
    $serveur = "127.0.0.1:3306";
$rac = dirname(__FILE__); 
    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        $ERRmsg="ERR Connection DB fail";
        header("Location: view/404.php");
		//echo $e;
        //print " Erreur de connexion PDO ";
        //die();
    }
}
?>