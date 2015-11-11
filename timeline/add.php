<?php
    # Ex 4 : Write a tweet
    include("timeline.php");
    $timeline = new TimeLine();
    $author = $_POST["Author"];
    $content = $_POST["Content"];
    $content = htmlspecialchars($content,ENT_COMPAT);
    #$content = strip_tags($content);
    #$contnet = mysql_real_escape_string($content);
    $url = "http://".$_SERVER["HTTP_HOST"]."/timeline/index.php";
    $replace = "<a href=\"{$url}?type=content&query$query=%23$1\">#$1</a>";
    $regex = "/#([_]*[a-zA-Z0-9가-힣]+[\w가-힣]*)/";
    $content = preg_replace($regex, $replace, $content);
    #$content = preg_replace($regex,'<a href="index.php?tag=$1">$0</a>',$content );
    ///^[a-zA-Z]+(-[a-zA-Z]+){0,}[ ]?[a-zA-Z]+([-]{1}[a-zA-Z]+){0,}
    //"/^[a-zA-Z]+(-[a-zA-Z]+){0,}[ ]?([-]{1}[a-zA-Z]+)*/i"
    try {
        // 
        if (preg_match("/^[a-zA-Z]+(-[a-zA-Z]+){0,}[ ]?([-]{1}[a-zA-Z]+)*/i", $author)== true && (strlen($author) >0 && strlen($author) <= 20) ) { //validate author & content
            //call add function
            $tweet=array();
            array_push($tweet,$author);
            array_push($tweet,$content);
            $timeline->add($tweet);
            header("Location:index.php"); //redirect to index.php

        } else {
            header("Location:error.php");
        }
        
    } catch(Exception $e) {
        header("Location:error.php");
    }
?>
