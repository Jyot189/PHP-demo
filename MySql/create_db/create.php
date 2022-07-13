<?php

$servername ="localhost";
$connection="root";
$password="";

$conn=mysqli_connect($servername,$connection,$password);

if(!$conn){
    die("connection failed". mysqli_error($conn));
}

$sql="create database php_db";

if(mysqli_query($conn,$sql)){
    echo"database created";
}else{
    echo"database not created";
}
?>