<?php
$id = $_POST['select'];
require('admin/conn.php');
require_once('admin/conn.php');
$sql = 'SELECT * FROM sotr';
$otvet = mysql_query($sql);
 
$id_sql = "SELECT * FROM sotr WHERE id='$id'";
$otvet1 = mysql_query($id_sql);
$row = mysql_fetch_assoc($otvet1);
$result = mysql_query ($id_sql);

  if(!$result) exit(mysql_error()); 
  while($myrow = mysql_fetch_array ($result)) 
  { 
     
     $fio = $myrow['fio'];
     
     $post = $myrow['position'];
    
     $info = $myrow['other'];
    
     $id_p = $myrow['id'];
  } 
    

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin-панель</title>
      <meta charset="utf-8">      
      <link href="css/bootstrap.css" rel="stylesheet">      
      <link href="main.css" rel="stylesheet">      
      <script type="text/javascript">
          var visible = true;
          function showFun() {
              if(visible) {
                  document.getElementById('123' ).style.display = 'none';
                  visible = false;
              } else {
                  document.getElementById('123' ).style.display = 'block';
                  visible = true;
              }
          }
          </script>

     
  </head>
  <body class="body-xx">
   
    <div >
      <?php include 'view/header.php';?>
    </div>
     <h2>Управление пользователями</h2>
    <div class="update">
      <div class="spisok" >
      <form class="form-horizontal"  method="post">
        
        <h4><p>Выберите сотрудника:</p></h4>
        <p><select name="select" size="6">
          
           <?php
                
                    while($row = mysql_fetch_assoc($otvet)){ 			
                              echo "<section>
                      <option value='{$row['id']}'>{$row['fio']}</option>
                      
                      </section>";
                      }
                    ?>           
        </select><br>
        <button type="submit" name="insert" class="btn btn-primary">Вывести информацию</button>
        <button type="submit" name="delete" class="btn btn-primary">Удалить</button></p> 
          
      </form>
        </div>
    </div>
    
  
    
    <h4>Обновление данных</h4>
    <div class="update-s">
        <form class="form-horizontal"  method="post">
  
        <fieldset >    
          <div class="form-group">
            <label for="text" class="control-label col-xs-2">ФИО</label>
            <div class="col-xs-10">
              <textarea type="text" class="form-control" id="inputfiou" name="fiou" placeholder="ФИО" required><?php echo $fio ?></textarea>
            </div>
          </div>    
          <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Должность</label>
            <div class="col-xs-10">
              <textarea type="password" class="form-control" id="inputpostu" name="postu" placeholder="врач" required><?php echo $post ?></textarea>
            </div>
          </div>  
          <div class="form-group">
            <label for="inputPassword" class="control-label col-xs-2">Информация</label>
            <div class="col-xs-10">
              <textarea type="text" class=" form-control " id="inputinfou" name="infou" placeholder="информация" required><?php echo $info ?></textarea>
            </div>
          </div>  
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              <button type="submit" name="insertu" class="btn btn-primary">Обновить</button>
              <input type = "reset" value = "Очистить форму" class="btn btn-primary">
            </div>
          </div>    
        </fieldset>
        </form>
    </div>  
        
      <div>
        <h4>Добавление нового пользователя</h4>
        <div class="insert">
          <form class="form-horizontal"  method="post">  
  <fieldset >    
    <div class="form-group">
      <label for="text" class="control-label col-xs-2">ФИО</label>
      <div class="col-xs-10">
        <input type="text" class="form-control" id="inputfio" name="fio_i" placeholder="ФИО" required>
      </div>
    </div>    
    <div class="form-group">
      <label for="inputPassword" class="control-label col-xs-2">Должность</label>
      <div class="col-xs-10">
        <input type="password" class="form-control" id="inputpost" name="post_i" placeholder="врач" required>
      </div>
    </div>  
    <div class="form-group">
      <label for="inputPassword" class="control-label col-xs-2">Информация</label>
      <div class="col-xs-10">
        <input type="password" class="form-control" id="inputinfo" name="info_i" placeholder="информация" required>
      </div>
    </div>  
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-10">
        <button type="submit" name="insert_t" class="btn btn-primary">Добавить</button>
        <input type = "reset" value = "Очистить форму" class="btn btn-primary">
      </div>
    </div>    
  </fieldset>
</form>
        </div>
      </div>
    
  </body>
</html>
<?php
  require('admin/conn.php');
require_once('admin/conn.php');
  if(isset($_POST['insert'])){
    
  }
  if(isset($_POST['delete'])){
    $sql_d = "DELETE FROM sotr WHERE id='$id'";
    $result_d = mysql_query($sql_d);
    if($result_del=='TRUE'){
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Пользователь успешно удален');}
      </script>";
                          die();     
    }
    else{
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Ошибка удаления');}
      </script>";
                          die();     
    }
  }
     
  if(isset($_POST['insertu'])){
     $fio_u = $_POST['fiou'];
     $post_u = $_POST['postu'];
     $info_u = $_POST['infou'];
     $sql_u = "UPDATE sotr SET fio='$fio_u',position='$post_u',other='$info_u' WHERE id='$id_p'";
     $result_u = mysql_query($sql_u);
      
     if($result_u=='TRUE'){
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Данные обновлены');}
      </script>";
                          die();     
    }
    else{
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Ошибка обновления данных');}
      </script>";
                          die();     
    }
  }
  if(isset($_POST['insetr_t'])){
     
    
  }
  $fio_i=$_POST['fio_i'];
    $post_i=$_POST['post_i'];
    $info_i=$_POST['info_i'];
    if (empty($post_i)) {
    }
                else{
                  $sql_i = "INSERT INTO sotr (fio,position,other) VALUES ('$fio_i','$post_i','$info_i')";
     $result_i = mysql_query($sql_i);
                if($result_i=='TRUE'){
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Пользователь зарегистрирован');}
      </script>";
                          die();     
    }
    else{
      echo "<script type='text/javascript'>
      window.onload = function(){ alert('Ошибка');}
      </script>";
                          die();     
    }
                }
 
?>