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
            
        </style>
    </head>
    <body>
    <a href="./?action=default">acceuil</a>
    <a href="./?action=login">connexion</a>
    <?php 
    if(isLoggedOnAsAdmin())
        echo '<a href="./?action=crud">crud</a>';
    ?>
   