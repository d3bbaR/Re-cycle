<?php
include "conn.php";

//oproepen van functie die als resultaat wat in je tabel staat teruggeeft in een array

function query($sql)
{
  include "conn.php";
  $values = array();
  $result = mysqli_query($conn, $sql);


  while ($row = mysqli_fetch_assoc($result)) {
    $values[] = $row;

  }
  return $values;
}
//query die gebruikt maakt van een selectbox (connectie tussen 2 tabellen)

function queryselect($sql, $pk, $naamkolom, $selectnaam, $selectedVal = 1)
{
  include "conn.php";
  $result = mysqli_query($conn, $sql);

  echo "<select name = $selectnaam>";
  while ($row = mysqli_fetch_assoc($result)) {
    if ($selectedVal == $row[$pk]) {
      echo "<option selected value = $row[$pk]>$row[$naamkolom]</option>";
    } else {
      echo "<option value = $row[$pk]>$row[$naamkolom]</option>";
    }


  }
  echo "</select><br><br>";
}


//naar pagina

function go($map, $page)
{
  header("Location:../$map/$page.php");
}

// verbindingen met tabellen
$footer = "SELECT * from footer";
$footer_sort = "SELECT * FROM footer ORDER BY PK ";

$tekst = "SELECT * from  tekst";
$teskt_sort = "SELECT * from  tekst ORDER BY PK";

$rol = "SELECT * from rol";
$rol_sort = "SELECT * from rol ORDER BY PK";

$account = "SELECT * FROM account";
$account_sort = "SELECT * from account ORDER BY PK";

$catalogus = "SELECT * from catalogus";
$naam = "SELECT * from catalogus where";
$type = "SELECT * from Categorie";
$uren = "SELECT * FROM uren";

$dagen = "SELECT * FROM dagen";
$selector = "SELECT gegevens.naam,gegevens.email, gegevens.gekeurd, gegevens.telefoon, gegevens.type, 
resuren.PK,uren.uren ,  dagen.dagen,  resuren.bezet , resuren.FK_geg from resuren left join 
uren on resuren.FK_uren = uren.PK left join dagen on resuren.FK_dagen = dagen.PK left join gegevens on 
gegevens.PK = resuren.FK_geg where bezet =1 and FK_geg !=0 order by resuren.PK";

$selector2 = "SELECT gegevens.naam,gegevens.email, gegevens.gekeurd, gegevens.telefoon, gegevens.type, 
resuren.PK,uren.uren ,  dagen.dagen,  resuren.bezet , resuren.FK_geg from resuren left join 
uren on resuren.FK_uren = uren.PK left join dagen on resuren.FK_dagen = dagen.PK left join gegevens on 
gegevens.PK = resuren.FK_geg where bezet =1 and FK_geg !=0 ";

$bezet = "SELECT resuren.bezet ,resuren.PK,uren.uren,dagen.dagen  from resuren left join uren on uren.PK = FK_uren 
left join dagen on dagen.PK = resuren.FK_uren where bezet = 1";
// moet manueel worden toegevoegd and FK_dagen = 4";