<?php
include "conn.php";

//oproepen van functie die als resultaat wat in je tabel staat teruggeeft in een array

function query($sql){
    include "conn.php";
    $values = array();
    $result = mysqli_query($conn,$sql);

    
    while ( $row = mysqli_fetch_assoc($result) ){
        $values[] = $row;

}
return $values;
}
//query die gebruikt maakt van een selectbox (connectie tussen 2 tabellen)

function queryselect($sql,$pk,$naamkolom,$selectnaam,$selectedVal=1){
    include "conn.php";
    $result = mysqli_query($conn,$sql);

    echo "<select name = $selectnaam>";
    while ( $row = mysqli_fetch_assoc($result) ){
      if ($selectedVal == $row[$pk]) {
        echo "<option selected value = $row[$pk]>$row[$naamkolom]</option>";
      }else{echo "<option value = $row[$pk]>$row[$naamkolom]</option>";}
        

}
echo "</select><br><br>";
}


//naar pagina

function go($map,$page){
  header("Location:../$map/$page.php");
}

// verbindingen met tabellen
$footer = "SELECT * from footer";
$footer_sort = "SELECT * FROM footer ORDER BY PK ";

$tekst = "SELECT * from  tekst";
$teskt_sort = "SELECT * from  tekst ORDER BY PK";

$rol ="SELECT * from rol";
$rol_sort = "SELECT * from rol ORDER BY PK";

$account = "SELECT * FROM account";
$account_sort = "SELECT * from account ORDER BY PK";

$uren = "SELECT * FROM uren";