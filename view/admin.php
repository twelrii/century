<?php
require_once "../config/db_connect.php";
$mysqli = new mysqli($host, $user, $password, $database);
$query = "SELECT  * FROM articles";
$result = $mysqli->query($query);
$i = 0;
while ($row = $result->fetch_array(MYSQLI_ASSOC)){
    $articles[] = $row;
    /*if($i%2 === 0){
        $timeline['right'][] .= "<p>".$articles[$i]['year']."</p>";
    }else{
        $timeline['left'][] .= "<p>".$articles[$i]['year']."</p>";
    }
    $i++;*/
}

require_once "../template/admin.html";