<?php 
echo "<H1 id=titre>$libTitre</H1>";
?>

<div id=content-spe>

<?php 
foreach($lesSpecialites as $spe)
{
?>
    <div class=Specialite id="<?php echo $spe->id; ?>">
        <div class=img>
            <img class=apercu src="<?php echo $spe->urlImg;?>">  
            <img class=blason src="images/departements/<?php echo $spe->departement->numero;?>.png" >
            <?php echo $spe->note;?>/5
        </div>
        <div class=text>     
            <H6><?php echo $spe->lib;?><H6>
            <p><?php echo $spe->description;?></p>  
        </div>
    </div>
<?php } ?>

</div>

<script>
// recupere l'id de la spe selectionnée

const spes = document.querySelectorAll(".Specialite"); // recupere toutes les spe
spes.forEach(spe => 

    spe.addEventListener("dblclick", e => { // double click
        window.location.href = "index.php?s="+spe.id; //variable s dans url
    })	    

)

</script>