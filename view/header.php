<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>La Bouffe de Là-bas</title>
        <style type="text/css">
            @import url("css/style.css");
            @import url("css/spe.css");
            @import url("css/listeSpe.css");
            @import url("css/carte.css");
            @import url("css/auth.css");
            @import url("css/stars.css");
            @import url("css/header.css");            
        </style>
    </head>
    <body>
        <header>
            <div class="bannerinside">
                <img id=logo src="images/Visuals/logo.png">
                <a class=accueil href="./?action=default">Accueil</a>           
                <?php 
                if(isLoggedOnAsAdmin())
                    //CRUD s'affiche que si un admin est connecté
                    echo '<a class=crud href="./?action=crud">CRUD</a>';
                ?>
                <a class=cnx href="./?action=login">Se Connecter</a>
            </div>
        </header>
        <div id=header></div>
        <!-- Bootsrap et JQuerry -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   