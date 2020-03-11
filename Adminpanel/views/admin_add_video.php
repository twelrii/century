
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
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
  <link rel="stylesheet" href="../MDB/css/style.css">
  <link rel="stylesheet" href="../mine.css">
</head>
<body class="fon_add_vid">
 <div class="container mt-1 ">
  <!-- Material form contact -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
      <strong>Добавить видео</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
   
      <!-- Form -->
      <form class="text-center" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>" style="color: #757575;" action="#!" method= "POST" enctype="multipart/form-data">
 
          <!-- Name -->
          <div class="md-form mt-3">
              <input type="text" id="materialContactFormName" class="form-control" name="Vlink" value="<?=$article['V_link']?>" autofocus required>
              <label for="materialContactFormName">Вставьте ссылку на видео</label>
          </div>

          

          <!-- E-mail -->
          <div class="md-form">
              <input type="text" id="materialContactFormEmail" class="form-control" name="Vname" value="<?=$article['V_name']?>" autofocus required >
              <label for="materialContactFormEmail">Название видео</label>
          </div>

          <!-- Subject -->
        
          <!--Message-->
          <div class="md-form">
              <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" name="Vdescription"><?=$article['V_description']?></textarea>
              <label for="materialContactFormMessage">Описание</label>
          </div>

          <!-- Copy -->
         

          <!-- Send button -->
          <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

      </form>
      <!-- Form -->

  </div>

</div>
</div>
  <script type="text/javascript" src="../MDB/js/jquery.min.js"></script>
  <script type="text/javascript" src="../MDB/js/popper.min.js"></script>
  <script type="text/javascript" src="../MDB/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../MDB/js/mdb.min.js"></script>
  <script type="text/javascript"></script>
  <?php
    // если была произведена отправка формы
    if(isset($_FILES['file'])) {
      // проверяем, можно ли загружать изображение
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        // загружаем изображение на сервер
        make_upload($_FILES['file']);
        echo "<strong>Файл успешно загружен!</strong>";
      }
      else{
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";  
      }
    }
    ?>
</body>
</html>
