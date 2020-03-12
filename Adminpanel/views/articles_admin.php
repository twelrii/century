<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">

    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../MDB/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../MDB/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <!-- MDBootstrap Datatables  -->
    <link href="../MDB/css/addons/datatables.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../mine.css">
    <style>
   .adt { 
    font-size: 30px; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: white; 
    font-weight: 900;
    text-align: center;
    padding: 20px;
    
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
   
   }
   .container{
    
   
    box-shadow: 0 0 10px rgba(0,0,0,0.5);
    opacity: 1;
    font-weight: 900px;
   }
  
   body {
   
   }
  </style>
</head>
<body class="fon">
     <div class= "container mb-3 mt-3">
     <img src="img/main/100_logo.gif" alt="">   
     <h1 class="adt"> Админ панель</h1>

     <a href="index.php?action=add" class= "btn btn-success" > Добавить статью</a>
         <a href="index.php?action=video&id=1" class= "btn btn-primary" > Изменить видео</a>  
        
         <table  id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
      
         <thead>    
      
            <tr>
                <th class="th-sm">Год</th>
                <th class="th-sm">Название</th>
                <th class="th-sm">Содержание</th>
                <th class="th-sm"></th>
               
            </tr>
          </thead>
            <tbody>
                <?php foreach($articles as $a): ?>
                <tr>
                        <td class="year"><?=$a['Tyear']?></td>
                        <td class="title"><?=$a['titles']?></td>
                        <td class="cont"><?=$a['content']?></td>
                        <td class="but"><a href="index.php?action=edit&id=<?=$a['id']?>" class="btn btn-primary">Редактировать</a>
                        <a href="index.php?action=delete&id=<?=$a['id']?>" class="btn btn-danger"> Удлаить</a>
                        </td>
                        
                </tr>
                <?php endforeach ?>
                </tbody>
    <tfoot>
    <tr>
    <th class="th-sm">Год</th>
                <th class="th-sm">Название </th>
                <th class="th-sm">Содержание</th>
                <th class="th-sm"></th>
                
    </tr>
  </tfoot>
 </table>
 </div>
      <!-- jQuery -->
   <script type="text/javascript" src="../MDB/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../MDB/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../MDB/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="../MDB/js/addons/datatables.min.js"></script>

<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
  });
  </script>
</body>
</html>
           
       