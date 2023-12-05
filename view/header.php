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
            @import url("css/footer.css");
            @import url("css/header.css");
        </style>
    </head>

    <header>
        <div id="accueil">
            <img class="castle" src="images/icons/BlackWhiteIcons/castle.png";
            <a href="./?action=default">Accueil</a>
        </div>
        <img class="France" src="images/icons/BlackWhiteIcons/France.png";
        <div id="compte">
            <img class="castle" src="images/icons/BlackWhiteIcons/Wknight.png";
            <a href="./?action=login">Compte</a>
        </div>
    
        <?php 
        if(isLoggedOn())
        echo '<a href="./?action=crud">crud</a>';
        ?>
    </header>
   
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
</html>