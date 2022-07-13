<?php

$servername="localhost";
$connection="root";
$password="";
$databasename="php_db";

$conn=mysqli_connect($servername,$connection,$password,$databasename);

if (!$conn){
    die("Could not connect to". mysqli_error($conn));
}

$sql="insert into MyGuests (firstname,lastname,email) values('jk','khant','jk@gmail.com');";
$sql.="insert into MyGuests (firstname,lastname,email) values('jm','khant','jm@gmail.com');";
$sql.="insert into MyGuests (firstname,lastname,email) values('kjm','khant','kjm@gmail.com');";

if($conn->multi_query($sql) === TRUE){
    echo"insert the data";
}else{
    echo"not insert data";
}
?>