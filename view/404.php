<?php
if(!isset($ERRmsg)){
    $ERRmsg="";
}
?>
<<<<<<< HEAD
=======

>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
<!DOCTYPE html>
<html>
<head>
<style>
<<<<<<< HEAD
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
=======
  
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
   
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e

</style>
</head>
<section class="page_404">
  <div class="container">
<<<<<<< HEAD
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
    
    <a href="../index.php" class="link_404 text">Retour
    </a>
  </div>
    </div>
    </div>
    </div>
  </div>
</section>
=======
    <div class="four_zero_four_bg">
      <h1 class="text-center text">Erreur 404</h1>
    </div>
    
    <h2 class="h2 text">Woops!</h2>
    
    <p class="text"><?php echo($ERRmsg)?></p>
    
    <p class="text">Le site a un petit problème, veuillez réessayer plus tard !</p>
    
  </section>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
<html>