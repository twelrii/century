<?php
require_once("../database.php");
require_once("../models/articles.php");


$link = db_connect();

    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

 if ($action == "add") {
    include("../views/article_admin.php");
    

        if(!empty($_POST)) {
            articles_new($link, $_POST['title'],
            $_POST['content'], $_POST['fotoname'] ,  $_FILES['file']['name']);
                echo '<script type="text/javascript">'; 
                echo 'window.location.href="index.php"';
                echo '</script>'; 
        }
 
 }else  if($action == "edit"){
     if(!isset($_GET['id'])){
     echo '<script type="text/javascript">'; 
     echo 'window.location.href="index.php"';
     echo '</script>'; 
     }
     $id = (int)$_GET['id'];

     if(!empty($_POST) && $id > 0){
            article_edit($link, $id, $_POST['title'],
            $_POST['content'], $_POST['fotoname'],  $_FILES['file']['name']);
            echo '<script type="text/javascript">'; 
            echo 'window.location.href="index.php"';
            echo '</script>'; 
     }
        $article =articles_get($link, $id);
        include("../views/article_admin.php");
    }   

    else if($action == "video"){
        $id = (int)$_GET['id'];
        
        if(!empty($_POST)) {
            $article = video_add($link, $_POST['Vlink'], $_POST['Vname'], $_POST['Vdescription']);
            echo '<script type="text/javascript">'; 
            echo 'window.location.href="index.php"';
            echo '</script>'; 
        }
        $article =get_video($link, $id);
        include("../views/admin_add_video.php");
    }
    else if($action == "delete"){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        echo '<script type="text/javascript">'; 
        echo 'window.location.href="index.php"';
        echo '</script>'; 
    }
    else{
        $articles = articles_all($link);
        include("../views/articles_admin.php");
    }
 
?>
