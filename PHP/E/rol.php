<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rol bijwerken</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
    include "../functions.php";
  $pk = $_POST["edit"];
  $select = "SELECT * FROM rol where PK = $pk";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_assoc($result);
 
echo "<form action='../U/rol.php' method ='post'><input type ='text'value ='".$row["rol"]. "'name ='rol'required>
<input type ='number' value ='".$row["visible"]."'min ='0' max ='1' name='visible' required>
<button name='edit' value='".$pk."'method='post'>edit </button>";
?>
</body>
</html>
