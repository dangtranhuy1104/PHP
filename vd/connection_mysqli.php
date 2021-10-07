<?php

    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "myProject";

    //tao ket noi
    $conn = new mysqli($servername,$username,$password,$dbname);

    //kiem tra ket noi
    if($conn->connect_error){
        die("Connection filed". $conn->connect_error);
    }
    //Querry string, creat table
    $sql = "CREAT TABLE Employye(
        id int PRIMARY KEY AUTO_INCREMENT,
        firstname VARCHAR(25) NOT NULL,
        lastname VACHAR(25) NOT NULL,
    );"

    if


    echo "Ket noi thanh cong";

    $conn->close();
?>