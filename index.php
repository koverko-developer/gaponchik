<?php
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Главная</title>
      <meta charset="utf-8">      
      <link href="css/bootstrap.css" rel="stylesheet">      
      <link href="main.css" rel="stylesheet">
      
  </head>
  <body class="body-xx">    
    <div>
      <?php include 'view/header.php';?>
    </div>
    <div class="content">
      <div class="right-l">
      <?php include 'view/ver-menu.php';?>
        </div>
      <div class="right-l">
      <?php include 'view/glabnaya.php';?>
        </div>
      <div class="right-m">
      <?php include 'view/right-menu.php';?>
    </div>
  </div>
    <div>
      <?php include 'footer.php';?>
    </div>
  </body>
</html>