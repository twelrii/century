<?php
    require_once  'config/db_connect.php';
    $mysqli = new mysqli($host, $user, $password, $database);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $mysqli->set_charset("utf8");

    /*$timeline['right'][] = "<div class='right-content'>";
    $timeline['left'][] = "<div class='left-content'>";*/
    $queryArt = "SELECT  * FROM articles";
    $queryVid = "SELECT * FROM videos";
    $result = $mysqli->query($queryArt);
    $i = 0;
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $articles[] = $row;
        if($i%2===0){
            $timeline['left'][] = [$articles[$i]['year'], $articles[$i]['id']];
        }else{
            $timeline['right'][] = [$articles[$i]['year'], $articles[$i]['id']];
        }
        $i++;
    }
    echo print_r($timeline, true);
    require_once "template/index2.html";