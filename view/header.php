<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>BOUFFE DE NOS TERROIRS</title>
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
            <img class="side left" src="images/Visuals/HeaderSide.png">
            <img class="side right" src="images/Visuals/HeaderSide.png">
            <a class=accueil href="./?action=default">acceuil</a>
            <a class=cnx href="./?action=login">connexion</a>
            <?php 
            if(!isLoggedOnAsAdmin())
                echo '<a class=crud href="./?action=crud">CRUD</a>';
            ?>
        </header>
        <div id=header></div>
   