<div class=Spe id="<?php echo $spe->id; ?>">
    <img class=blason src="images/departements/<?php echo $spe->departement->numero;?>.png" >
    <img class=apercu src="<?php echo $spe->urlImg;?>">        
    <H6><?php echo $spe->lib;?><H6>
    <p><?php echo $spe->description;?></p>   
    <img class=modif src="images/icons/plume.png">
</div>


<script>
const modif = document.querySelector(".modif");
const spe = document.querySelector(".Spe");
modif.addEventListener("dblclick", e =>{
    window.location.href = "?crud="+spe.id;
})
</script>
