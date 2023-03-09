<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nrloc = $_POST["nrloc"];
  
  // Connect to the database
  include 'conexiune.php';
  
  // Delete the record from the "persoane" table
  $sql = "DELETE FROM persoane WHERE nrloc = '$nrloc'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Inregistrare stearsa cu succes din tabelul 'persoane'";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  
  // Update the availability of the seat in the "locuri" table
  $sql = "UPDATE locuri SET disponibilitate = 0 WHERE nrloc = '$nrloc'";
  
  if (mysqli_query($conn, $sql)) {
    echo "Disponibilitatea locului a fost modificata cu succes in tabelul 'locuri'";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
}
?>