<!DOCTYPE html>
<html>
  <head>
    <title>Форма авторизации</title>
      <meta charset="utf-8">      
      <link href="css/bootstrap.css" rel="stylesheet">
      
      <link href="main.css" rel="stylesheet">
     
  </head>
  <body class="body-xx">
    <div>
      <?php include 'view/header.php';?>
    </div>
    <div class="text_form">  
       <div class="red">Данная форма входа предназначена только для администратора!</div>
    <h2 class="text_fr">Форма входа</h2><br>
     
      </div>  
    <div class="aut_form">
      <form class="form-horizontal"  method="post">
  
  <fieldset >    
    <div class="form-group">
      <label for="text" class="control-label col-xs-2">Логин</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" id="inputLogin" name="login" placeholder="student123" required>
      </div>
    </div>    
    <div class="form-group">
      <label for="inputPassword" class="control-label col-xs-2">Пароль</label>
      <div class="col-xs-10">
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Пароль" required>
      </div>
    </div>    
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-10">
        <button type="submit" name="submit" class="btn btn-primary">Войти</button>
        <input type = "reset" value = "Очистить форму" class="btn btn-primary">
      </div>
    </div>    
  </fieldset>
</form>
    </div>
    
     
  </body>
</html>
<?php
require ('admin/conn.php');           
  if(isset($_POST['submit'])){   
    $login = $_POST['login'];    
    $password = $_POST['password'];    
    $result2 = mysql_query("SELECT * FROM users WHERE login='$login'");
    $myrow2 = mysql_fetch_array($result2);    
      if (($login == $myrow['login'])&&($password==$myrow['pass'])) {$_SESSION['login']=$login; 
           echo '<script>location.replace("../index.php");</script>'; exit;
                                 
                                }
      else {
        echo "<script type='text/javascript'>
      window.onload = function(){ alert('Неверный логин или пароль');}
      </script>";
                          die();
      }
       
  } 
?>