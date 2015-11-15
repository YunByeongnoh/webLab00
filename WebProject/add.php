<?php
    include ("query.php");
    $go = new Webquery();
    $id = $_POST["user_id"];
    $pw = $_POST["user_pass"];
    $pw2 = $_POST["user_pass2"];
    $email = $_POST["user_email"];
    #print("AA");
    try {
        #print("aaa");
        if (!strcmp($pw, $pw2)&& (strlen($id)>=4 && strlen($id)<=20) && ( strlen($pw)>=4 && strlen($pw)<=20) && preg_match("/[a-zA-Z0-9]+[@]{1,1}[a-zA-Z]+[.]{1,1}[a-zA-Z]+/i", $email)) { //validate author & content
             //call add function
            $insert = array();
            array_push($insert,$id);
            array_push($insert,$pw);
            array_push($insert,$email);
            $go->add($insert);
            
            header("Location:login.php"); //redirect to index.php
            

        } else {
            header("Location:error.php");
        }

    } catch(Exception $e) {
        print($e);
        header("Location:error.php");
    }

?>