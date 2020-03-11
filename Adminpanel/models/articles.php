<?php

function articles_all($link){
   $query = "SELECT * FROM articles ORDER BY id DESC";
   $result = mysqli_query($link, $query);

    if (!$result)
    die(mysqli_connect_errno($link));

    //извлечение из бд
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}

function articles_get($link, $id_article){
    $query = sprintf("SELECT * FROM articles WHERE id=%d",(int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
    die(mysqli_error($link));

    $article = mysqli_fetch_assoc($result);

    return $article;
}

function articles_new($link, $title, $content, $data, $file){
    
    $title = trim($title);
    $content = trim($content);
  
    $files =   "Stolet_$file";

    if ($title == '')
        return false;

    $t = "INSERT INTO articles (Tyear, titles, content , files) VALUES ('%s', '%s', '%s', '%s')";

    $query = sprintf($t,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $data),
        mysqli_real_escape_string($link, $files));

       
        $result = mysqli_query($link, $query);

        if (!$result)
            die(mysqli_error($link));

        return
        true;
}

function article_edit($link, $id, $title, $content, $data, $file){
    $title = trim($title);
    $content = trim($content);
    $data = trim($data);
    $id = (int)$id;

    $files =   "Stolet_$file";

    if ($title == '')
    return false;
 
    if ($file == ''){
        $sql = "UPDATE articles SET Tyear='%s', titles='%s', content='%s' WHERE id='%d'";
        $query = sprintf($sql,
            mysqli_real_escape_string($link, $title),
            mysqli_real_escape_string($link, $content),
            mysqli_real_escape_string($link, $data),
            $id);
           


    } else {
    $sql = "UPDATE articles SET Tyear='%s', titles='%s', content='%s', files='%s' WHERE id='%d'";
    $query = sprintf($sql,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $data),
        mysqli_real_escape_string($link, $files),
        $id);
        

    }

    $result = mysqli_query($link, $query);

    if (!$result) 
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);

}

function articles_delete($link, $id){
    $id = (int)$id;
    if ($id ==0) 
    return false;

    $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
}


    function get_video($link, $id_article){
        $query = sprintf("SELECT * FROM Video WHERE id=%d",(int)$id_article);
        $result = mysqli_query($link, $query);

        if (!$result)
        die(mysqli_error($link));

        $article = mysqli_fetch_assoc($result);

        return $article;
    }
    function video_add($link, $vlink , $vname, $vdescription){
    
        if ($vlink == '')
            return false;
    
        $sql = "UPDATE Video SET id='1', V_link='%s', V_name='%s', V_description='%s' WHERE id='1'";
    
        $query = sprintf($sql,
        mysqli_real_escape_string($link, $vlink),
        mysqli_real_escape_string($link, $vname),
        mysqli_real_escape_string($link, $vdescription));
    
        $result = mysqli_query($link, $query);
        
    
        if (!$result)
            die(mysqli_error($link));
    
        return mysqli_affected_rows($link);
    }

?>