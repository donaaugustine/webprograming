<?php
$servername = "localhost";
$username = "20mca023";
$password = "2474";
$dbname = "20mca023";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO student (name, branch, mark)
VALUES ('John', 'CS', '434');";
$sql = "INSERT INTO student (name, branch, mark)
VALUES ('Julie', 'CS', '284');";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>