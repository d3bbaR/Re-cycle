<?php
echo '<table border="1">';
$start_row = 1;
$counter = 0;
if (($csv_file = fopen("C:\\xampp\htdocs\GitHub\Re-cycle\PHP\Uploads\\test.csv", "r")) !== FALSE) {
    while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
        $column_count = count($read_data);
        $start_row++;
        for ($c = 0; $c < $column_count; $c++) {
            $counter += 1;
            switch ($counter) {
                case 1:
                    $type = "FietsNR ";
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
                    $type = "Filiaal";
                    break;
                case 7:
                    $type = "Loc.";
                    break;
                case 8:
                    $type = "Cat.";
                    break;
                case 9:
                    $type = "Frame";
                    break;
                case 10:
                    $type = "Wielmaat";
                    break;
                case 11:
                    $type = "Jaar";
                    break;
                case 12:
                    $type = "Status";
                    break;
                case 13:
                    $type = "Demo";
                    break;
                case 14:
                    $type = "Maat";
                    break;
                case 15:
                    $type = "Versnellingen";
                    break;
                case 16:
                    $type = "Ink.prijs";
                    break;
                case 17:
                    $type = "prijs";
                    break;
                case 18:
                    $type = "Adviesprijs";
                    break;
                case 19:
                    $type = "framenr.";
                    break;
                case 20:
                    $type = "motornr.";
                    break;
                case 21:
                    $type = "Kenteken";
                    break;
                case 22:
                    $type = "Sleutelnr";
                    break;
                case 23:
                    $type = "Accunr.";
                    break;
                case 24:
                    $type = "Serienr.";
                    break;
                case 25:
                    $type = "Vrij veld";
                    $counter = 0;
                    break;

            }
            echo "<input type = 'text' value ='$read_data[$c]' name=''>";
        }
        echo '</tr>';
    }
    fclose($csv_file);
}
echo '</table>';
?>