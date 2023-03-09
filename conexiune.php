<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autocar";

// Crearea conexiunii
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificarea conexiunii
if (!$conn) {
  die("Conexiune esuata: " . mysqli_connect_error());
}
echo "Conexiune reusita";
?>
