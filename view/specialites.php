<?php 
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

