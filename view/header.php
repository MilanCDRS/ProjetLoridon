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
        <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            <li id="carousel__slide1"
                tabindex="0"
                class="carousel__slide">
            <div class="carousel__snapper">
                <a href="#carousel__slide4">
                <a href="#carousel__slide2">
            </div>
            </li>
            <li id="carousel__slide2"
                tabindex="0"
                class="carousel__slide">
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide1">
            <a href="#carousel__slide3">
            </li>
            <li id="carousel__slide3"
                tabindex="0"
                class="carousel__slide">
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide2">
            <a href="#carousel__slide4">
            </li>
            <li id="carousel__slide4"
                tabindex="0"
                class="carousel__slide">
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide3">
            <a href="#carousel__slide1">
            </li>
        </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide1"
                    class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide2"
                    class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide3"
                    class="carousel__navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide4"
                    class="carousel__navigation-button">Go to slide 4</a>
                </li>
                </ol>
            </aside>
    </section>
   