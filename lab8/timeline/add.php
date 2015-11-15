<?php
    # Ex 4 : Write a tweet
    include("timeline.php");
    $timeline = new TimeLine();
    $author = $_POST["Author"];
    $content = $_POST["Content"];
    $content = htmlspecialchars($content,ENT_COMPAT);

    try {
        // 
        if (preg_match("/^[a-zA-Z가-힣]+(-[a-zA-Z가-힣]+){0,}[ ]?([-]{1}[a-zA-Z가-힣]+)*/i", $author)== true && (strlen($author) >0 && strlen($author) <= 20) ) { //validate author & content
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
