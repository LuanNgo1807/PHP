<?php
    $severname="localhost";
    $username="root";
    $password="";
    $database="dienthoai";

    $conn= new mysqli($severname,$username,$password,$database);
    if(!$conn){
        echo "loi ket noi".mysqli_connect_error();
        exit();
    }
?>