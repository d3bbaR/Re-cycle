<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>footer bijwerken</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <?php
  include "../functions.php";
  $pk = $_POST["edit"];
  $select = "SELECT * FROM footer where PK = $pk";
  $result = mysqli_query($conn, $select);
  $row = mysqli_fetch_assoc($result);
  if ($row["tekst"] == "0") {
    echo "<form action='../U/footer.php' method ='post'><input type ='text'value ='" . $row["gegevens"] . "'name ='gegevens'required>
    <input type='text' value='" . $row["uren"] . "' name='uren' required><input id='invis' type='text' name='tekst' value ='" . $row["tekst"] . "'>" . "
    <input type ='number' value ='" . $row["visible"] . "'min ='0' max ='1' name='visible' required>
    <button name='edit' value='" . $pk . "'method='post'>edit </button>";
  } else {
    echo "<form action='../U/footer.php' method ='post'><input type ='text' id='invis' value ='" . $row["gegevens"] . "'name ='gegevens'required>
    <input type='text' id='invis' value='" . $row["uren"] . "' name='uren' required><input type='text' name='tekst' value ='" . $row["tekst"] . "'>" . "
    <input type ='number' value ='" . $row["visible"] . "'min ='0' max ='1' name='visible' required>
    <button name='edit' value='" . $pk . "'method='post'>edit </button>";
  }


  ?>
</body>

</html>