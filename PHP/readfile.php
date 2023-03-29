<?php
echo '<table border="1">';
$start_row = 1;
$counter = 0;
$row = 1;
echo "<form method = 'post' action = 'cataloguspushen.php'>";
if (($csv_file = fopen("C:\\xampp\htdocs\GitHub\Re-cycle\PHP\Uploads\\Tweewielers-29-03-2023.csv", "r")) !== FALSE) {
    while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
        $column_count = count($read_data);
        $start_row++;

        for ($c = 0; $c < $column_count; $c++) {
            $counter += 1;
            switch ($counter) {
                case 1:
                    $type = "FietsNR";
                    break;
                case 2:
                    $type = "Voorraad";
                    break;
                case 3:
                    $type = "Merk";
                    break;
                case 4:
                    $type = "Type";
                    break;
                case 5:
                    $type = "Kleur";
                    break;
                case 6:
                    $type = "Cat";
                    break;
                case 7:
                    $type = "Frame";
                    break;
                case 8:
                    $type = "Wielmaat";
                    break;
                case 9:
                    $type = "Jaar";
                    break;
                case 10:
                    $type = "Status";
                    break;
                case 11:
                    $type = "Demo";
                    break;
                case 12:
                    $type = "Maat";
                    break;
                case 13:
                    $type = "Versnellingen";
                    break;
                case 14:
                    $type = "Prijs";
                    break;
                case 15:
                    $type = "Framenr";
                    $counter = 0;
                    $row += 1;
                    break;

            }
            echo "<input type = 'text' value ='$read_data[$c]' name='" . $type . '_' . $row . "'>";
        }
        echo '</tr>';
    }
    fclose($csv_file);
}
echo '</table>';
echo "<button type = 'submit'>add</button></form>";
?>