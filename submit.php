<?php
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$nrloc = $_POST['nrloc'];



$conn = mysqli_connect("127.0.0.1", "root", "", "autocar");

$sql1 = "INSERT INTO persoane (nume, prenume, email, tel, nrloc)
VALUES ('$nume', '$prenume', '$email', '$tel', '$nrloc')";

$sql2 = "UPDATE locuri SET disponibilitate = 1 WHERE nrloc = $nrloc";

if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
  echo "Inregistrarea a avut loc cu succes.";
} else {
  echo "Eroare: " . $sql1 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

