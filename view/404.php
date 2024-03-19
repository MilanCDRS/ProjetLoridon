<?php
if(!isset($ERRmsg)){
    $ERRmsg="";
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
  
/*======================
        404 page
=======================*/

.page_404{
    background:#fff; 
    font-family: 'Arvo', serif;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.container{
  width: 100%;
}

.four_zero_four_bg{
    background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    background-repeat: no-repeat;
    background-position: center;
    height: 400px;
    width: 100%;
 }
 
 .four_zero_four_bg h1{
    font-size:75px;
 }
.four_zero_four_bg h2{
    font-size:80px;
 }
   

</style>
</head>
<section class="page_404">
  <div class="container">
    <div class="four_zero_four_bg">
      <h1 class="text-center text">Erreur 404</h1>
    </div>
    
    <h2 class="h2 text">Woops!</h2>
    
    <p class="text"><?php echo($ERRmsg)?></p>
    
    <p class="text">Le site a un petit problème, veuillez réessayer plus tard !</p>
    
  </section>
<html>