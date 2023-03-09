<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Rezervare loc</h1>
<form action="submit.php" method="post">
  Nume: <input type="text" name="nume"><br>
  Prenume: <input type="text" name="prenume"><br>
  Email: <input type="email" name="email"><br>
  Telefon: <input type="tel" name="tel"><br>
  Loc:
  <select name="nrloc">
    <?php
      $conn = mysqli_connect("127.0.0.1", "root", "", "autocar");
      if (!$conn) {
        die("Conexiune esuata: " . mysqli_connect_error());
      }
      $result = mysqli_query($conn, "SELECT nrloc, disponibilitate FROM locuri WHERE disponibilitate = 0");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['nrloc'] . "'>" . $row['nrloc'] . "</option>";
      }
      mysqli_close($conn);
    ?>
  </select>
  <input type="submit" value="Submit">
</form>>
</body>
</html>