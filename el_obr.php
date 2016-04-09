<?php
require ('admin/conn.php'); 
require_once ('admin/conn.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Электронное обращение</title>
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
          <div class="glav">
              <form class="form-horizontal" method="post">
                <fieldset > 
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label  text_f">Введите ваше ФИО (полностью):</label><br><br>
                    <div class="col-sm-8">
                      <input type="text" class="form-control in_f" name="inputfio" placeholder="Иванов Иван Иваныч" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label  text_f">Ваш адрес (нас.пункт, улица, дом, квартира): </label><br><br>
                    <div class="col-sm-8 ">
                      <input type="text" class="form-control in_f" name="inputaddress" placeholder="Ленина,17" required>
                    </div>
                  </div> 
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label  text_f">Контактный телефон: </label><br><br>
                    <div class="col-sm-8 ">
                      <input type="text" class="form-control in_f" name="inputtel" placeholder="+375(33) 305-00-00" required>
                    </div>
                  </div>    
                 <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label  text_f">Ваш E-mail адрес: </label><br><br>
                    <div class="col-sm-8 ">
                      <input type="email" class="form-control in_f" name="inputemail" placeholder="email@yandex.ru" required>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label  text_f">Тема сообщения: </label><br><br>
                    <div class="col-sm-8 ">
                      <input type="text" class="form-control in_f" name="inputtopic" placeholder="Тема" required>
                    </div>
                  </div>    
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label  text_f">Текст сообщения: </label><br><br>
                    <div class="col-sm-8 ">
                      <textarea type="text" class="form-control in_f" name="inputmessage" placeholder="Текст сообщения " required></textarea>
                    </div>
                  </div> 
                <div class="form-group">
                  <div class="btn_send">
                    <button type="submit" name="send" class="btn btn-primary">Отправить</button>
                  </div>
                </div>
                </fieldset>   
           </form> 
        </div>
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
<?php
  
  if(isset($_POST['send'])){
    
    $fio = $_POST['inputfio'];
    $address = $_POST['inputaddress'];
    $tel = $_POST['inputtel'];
    $email = $_POST['inputemail'];
    $topic = $_POST['inputtopic'];
    $message = $_POST['inputmessage'];
    echo $fio;    
    $result2 = mysql_query("INSERT INTO mail (inputfio,inputaddress,inputtel,inputemail,inputtopic,inputmessage) VALUES                        ('$fio','$address','$tel','$email','$topic','$message')");    
      if ($result2=='TRUE') { 
            
           echo "<script type='text/javascript'>
      window.onload = function(){ alert('Ваше обращение успешно тправлено');}
      </script>";
                          die();                                 
       }
      else {
        echo "<script type='text/javascript'>
      window.onload = function(){ alert('Ошибка отпраки. Повторите позже');}
      </script>";
                          die();
      }
       
  } 
?>