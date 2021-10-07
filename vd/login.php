<?php

    session_start();//bat buoc khi muon goi cac bien session 

    $_SESSION["username"] = "admin";
    $_SESSION["email"] = "admin@gmail.com";//khoi toa va gan gia tri cho sesson "key" => "Value"

    echo 'Welcome, '. $_SESSION["username"];//truy suat dung "Key" de truy suat value

    //huy tung sessions 1:
    if(isset($_SESSION["username"])){
        unset($_SESSION"username");
    }
    //huy toa bo session(toan bo cac bien session duoc kich hoat truoc do)
    session_destroy

    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"]===true){
        header("location:create.php");
        exit;
    }

    //create employee   
?>