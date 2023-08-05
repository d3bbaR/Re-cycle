<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tekst bijwerken</title>
  <link rel="stylesheet" href="../../css/css.css">
</head>

<body>
  <?php
  //includen pagina's
  include "../functions.php";

  //opvangen variabelen
  $pk = $_POST["edit"];
  $select = "SELECT * FROM tekst where PK = $pk";
  $result = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($result);

  // aanmaak velden
  echo "<form action='../U/tekst.php' method ='post'><textarea type ='text' name ='tekst'required>" . $row["tekst"] . "</textarea>

<button name='edit' value='" . $pk . "'method='post'>edit </button>";
  ?>
</body>

</html>