<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php_db";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Error connecting to". $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

?>