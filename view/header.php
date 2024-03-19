<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<<<<<<< HEAD
        <title>BOUFFE DE NOS TERROIRS</title>
=======
        <link href='https://fonts.googleapis.com/css?family=Grenze Gotisch' rel='stylesheet'>
        <title>La Bouffe de Là-bas</title>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
        <style type="text/css">
            @import url("css/style.css");
            @import url("css/spe.css");
            @import url("css/listeSpe.css");
            @import url("css/carte.css");
            @import url("css/auth.css");
            @import url("css/stars.css");
<<<<<<< HEAD
            @import url("css/header.css");            
=======
            @import url("css/header.css");  
            @import url("css/footer.css");           
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
        </style>
    </head>
    <body>
        <header>
<<<<<<< HEAD
            <img id=logo src="images/icons/BlackWhiteIcons/whiteKnight.png">
            <img class="side left" src="images/Visuals/HeaderSide.png">
            <img class="side right" src="images/Visuals/HeaderSide.png">
            <a class=accueil href="./?action=default">Acceuil</a>           
            <?php 
            if(!isLoggedOnAsAdmin())
                echo '<a class=crud href="./?action=crud">CRUD</a>';
            ?>
            <a class=cnx href="./?action=login">Se Connecter</a>
        </header>
        <div id=header></div>
=======
            <div class="bannerinside">
                <img id=logo src="images/Visuals/Header/logo.png">

                <div class="chateau">
                    <img id=castle src="images/icons/BlackWhiteIcons/castle.png">
                    <a class=accueil href="./?action=default">Accueil</a> 
                </div>          
                
                <?php 
                if(isLoggedOnAsAdmin())
                    //CRUD s'affiche que si un admin est connecté
                    echo '<a class=crud href="./?action=crud">CRUD</a>';
                ?>

                <div class="compte">
                    <img id=knight src="images/icons/BlackWhiteIcons/WKnight.png">
                    <a class=cnx href="./?action=login">Compte</a>
                </div>

            </div>
        </header>
        <div id=header></div>
        <!-- Bootsrap et JQuerry -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
   