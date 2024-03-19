<?php 
function toPX($note){
    $px = 20*$note;
    return $px;
}
?>

<div class=Spe id="<?php echo $spe->id; ?>">
<<<<<<< HEAD
    <img class=blason src="images/departements/<?php echo $spe->departement->numero;?>.png" >
    <img class=apercu src="<?php echo $spe->urlImg;?>">        
=======
    <div class="thumbnails">
        <img class=blason src="images/departements/<?php echo $spe->departement->numero;?>.png" >
        <img class=apercu src="<?php echo $spe->urlImg;?>">
    </div>   
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
    <H6><?php echo $spe->lib;?><H6>
    <p><?php echo $spe->description;?></p> 
    <div spe="<?php echo $spe->id; ?>" class="color-stars" style="height:20px;width:<?php echo toPX($spe->note);?>px;"> 
        <div class="content-stars" style="height:20px;width:100px">
            <img id="<?php echo $spe->id; ?>_1" class=Star src="images/icons/starv2.png">      
            <img id="<?php echo $spe->id; ?>_2" class=Star src="images/icons/starv2.png">   
            <img id="<?php echo $spe->id; ?>_3" class=Star src="images/icons/starv2.png">   
            <img id="<?php echo $spe->id; ?>_4" class=Star src="images/icons/starv2.png">   
            <img id="<?php echo $spe->id; ?>_5" class=Star src="images/icons/starv2.png">
        </div>
    </div>
<<<<<<< HEAD
    <p><?php echo $spe->note ?> / 5</p>
    <?php
    if(isLoggedOnAsAdmin()){
=======
    <!--<p><?php echo $spe->note ?> / 5</p>-->
    <?php
    if(isLoggedOn()){
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
        echo '<img class=modif src="images/icons/BlackWhiteIcons/plume.png">';
        echo " <script>// Clic CRUD
        const modif = document.querySelector('.modif');
        const spe = document.querySelector('.Spe');
        modif.addEventListener('dblclick', e =>
            {
                window.location.href = '?crud='+spe.id;
            }
        )
<<<<<<< HEAD
        </script>";
    }
    if(isLoggedOn()){
        echo "
        <script>
=======
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
        // Fonction note -> px
        // Clic des étoiles
        const color = document.querySelector('.color-stars');
        const stars = document.querySelectorAll('.Star')
        stars.forEach(star =>
            star.addEventListener('click', e => 
                {
                    window.location.href = '?star='+star.id;
                }
            )
        )
        </script>";
<<<<<<< HEAD
    }?> 
=======
    }?>  
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e

    
    
</div>


<script>


</script>
