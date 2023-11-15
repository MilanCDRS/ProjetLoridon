<H1>Liste des Spécialités<H1>
    
<?php 
// recupere 
if(isset($_GET['r']))
{
    $idReg = $_GET['r']; 
    $reg = GetRegionByCode($idReg);
    $lesSpecialites = GetSpecialitesByRegion($reg);
}

foreach($lesSpecialites as $spe)
{
?>
    <div class=Specialite id="<?php echo $spe->id; ?>">
        <H6><?php echo $spe->lib;?><H6>
        <p><?php echo $spe->description;?></p>        
    </div>

<?php
}

?>

