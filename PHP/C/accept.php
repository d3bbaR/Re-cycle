<?php

// includen van pagina's
include "../conn.php";
include "../functions.php";
include "../R/iets.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//opvangen variabelen en declareren query
$pk = $_POST["edit"];
$edit = "UPDATE gegevens set gekeurd='1' where pk=$pk";
$result = mysqli_query($conn, $edit);


$select = "SELECT gegevens.naam,gegevens.email, gegevens.gekeurd, gegevens.telefoon, gegevens.type, 
resuren.PK,uren.uren ,  dagen.dagen,  resuren.bezet , resuren.FK_geg from resuren left join 
uren on resuren.FK_uren = uren.PK left join dagen on resuren.FK_dagen = dagen.PK left join gegevens on 
gegevens.PK = resuren.FK_geg where bezet =1 and FK_geg =" . $pk;
foreach (query($select) as $res) {
    $naam = $res["naam"];
    $email = $res["email"];
    $telefoon = $res["telefoon"];
    $datum = $res["dagen"];
    $uur = $res["uren"];
    echo $naam . " " . $email . " " . $telefoon . " " . $datum . " " . $uur;
    header("Location:../R/afspraken.php?mail=1");

    //mail naar klant het is goedgekeurd

    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


    require '../PHPMailer-master/PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/PHPMailer-master/src/SMTP.php';

    //Load Composer's autoloader
//require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'baftech3000@gmail.com'; //SMTP username
        $mail->Password = $walf; //SMTP password
        $mail->SMTPSecure = "TLS"; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('baftech3000@gmail.com', 'BafTech');
        $mail->addAddress($email); //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //+$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Beste' . ' ' . $naam;
        $mail->Body = "de afspraak die je hebt aangevraagd voor" . " " . $datum . " om" . $uur . " is goedgekeurd";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>