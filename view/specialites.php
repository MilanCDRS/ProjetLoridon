<?php 

echo "<H1>$libTitre<H1>";

foreach($lesSpecialites as $spe)
{
?>
    <div class=Specialite id="<?php echo $spe->id; ?>">
        <img class=blason src="images/departements/<?php echo $spe->departement->numero;?>.png" >
        <img class=apercu src="<?php echo $spe->urlImg;?>">        
        <H6><?php echo $spe->lib;?><H6>
        <p><?php echo $spe->description;?></p>        
    </div>

<?php
}

?>

<script>
// recupere l'id de la spe selectionnée

const spes = document.querySelectorAll(".Specialite"); // recupere toutes les spe
spes.forEach((spe) => 
spe.addEventListener("dblclick", e => { // double click
		window.location.href = "index.php?s="+spe.id; //variable s dans url
	})	
)

</script>

