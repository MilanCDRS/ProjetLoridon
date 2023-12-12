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

body{
    display: flex;
    justify-content: center;
    align-items: center;
}

.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    width: 800px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
       font-size:80px;
       }
       
       .link_404{      
  color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 300px;
    display: inline-block;}
  .contant_box_404{ margin-top:-50px;}

  .text{
    display: flex;
    justify-content: center;
    align-items: center;
  }

</style>
</head>
<section class="page_404">
  <div class="container">
    <div class="row"> 
    <div class="col-sm-12 ">
    <div class="col-sm-10 col-sm-offset-1  text-center">
    <div class="four_zero_four_bg">
      <h1 class="text-center text">404</h1>
    
    
    </div>
    
    <div class="contant_box_404">
    <h3 class="h2 text">
    Woops!
    </h3>
    <p class="text"><?php echo($ERRmsg)?></p>
    
    <p class="text">Le site a un petit problème, veuillez réessayer plus tard!</p>
    
    <!-- <a href="./?action=defaut" class="link_404 text">Retour
    </a>-->
  </div>
    </div>
    </div>
    </div>
  </div>
</section>
<html>