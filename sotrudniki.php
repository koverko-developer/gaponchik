 <?php
require('admin/conn.php');
require_once('admin/conn.php');
$sql = 'SELECT * FROM sotr';
$otvet = mysql_query($sql);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Сотрудники</title>
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
            <h2>Сотрудники</h2><br>
              <table class="table table-hover table-bordered ">
                <tr>   

                      <td><b>ФИО</b></td>
                      <td><b>Должность</b></td>
                      <td><b>Иная информация</b></td>                   
                    </tr>
                <?php
                
                    while($row = mysql_fetch_assoc($otvet)){ 			
                              echo "<section>
                    <tr>   

                      <td>{$row['fio']}</td>
                      <td>{$row['position']}</td>
                      <td>{$row['other']}</</td>                   
                    </tr>
                      </section>";
                      }
                    ?>  
              </table>
              
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