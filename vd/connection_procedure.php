<?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 

    //tao ket noi
    $conn = new mysqli("localhost","root","");

    //kiem tra ket noi
    if($conn->connect_error){
        die("Connection filed". $conn->connect_error);
    }
    echo "Ket noi thanh cong";
?>