<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error connecting to". $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) values(?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);//sss means s-string

$firstname="kishu";
$lastname="khant";
$email="kishu@gmail.com";
$stmt->execute();
?>