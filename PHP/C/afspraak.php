<?php
include "../conn.php";
include "../functions.php";
$dag = $_POST["dag"];
$uur = $_POST["uur"];
$naam = $_POST["naam"];
$email = $_POST["email"];
$telefoon = $_POST["telefoon"];
$type = $_POST["typeonderhoud"];
switch ($type){
    case 1:
        $msg = "Klein onderhoud 30 minuten";
        break;
    case 2:                
        $msg = "Groot onderhoud 1 uur";
        break;
    case 3:
        $msg = "Gesprek aankoop fiets 45 minuten";
        break;
    }
$fk_dagen = "SELECT * from dagen where dagen = '".$dag."'";


$fk_uren = "SELECT * from uren where uren = '".$uur."'";
foreach (query($fk_dagen) as $res){
    foreach (query($fk_dagen) as $res2){
        $pk = "SELECT * from resuren where FK_uren = $res[PK] and FK_dagen = $res2[PK]";
        foreach (query($pk) as $res3){
            $update ="UPDATE resuren set FK_uren=$res[PK] ,FK_dagen =$res2[PK] ,bezet=1 where pk=$res3[PK]";
            $result = mysqli_query($conn,$update);
            echo $update;
        }
    }
}

header("Location:../bevestigd.php");
echo "halllooooo";
include "../R/iets.php";


//mail naar eigenaar

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer-master/PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/PHPMailer-master/src/SMTP.php';

//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'baftech3000@gmail.com';                     //SMTP username
    $mail->Password   = $walf;                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('baftech3000@gmail.com', 'BafTech');
    $mail->addAddress('baftech3000@gmail.com');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //+$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Beste jurgeen';
    $mail->Body    = "de volgende persoon:"." ".$naam." heeft een "." ".$msg." "." geplaatste voor: ".$dag." ".$uur." is dit oke?"
    ." je kunt deze klant berijken op:"." ".$telefoon." ".$email;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
//mail naar klant

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'baftech3000@gmail.com';                     //SMTP username
    $mail->Password   = $walf;                               //SMTP password
    $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('baftech3000@gmail.com', 'BafTech');
    $mail->addAddress($email);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //+$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Beste'.$naam;
    $mail->Body    = "Je hebt een ".$msg." "." geplaatste voor: ".$dag." ".$uur." 
    uw afspraak word op dit moment verwekrt. U zult nog een mail krijgen als deze wordt goedgekeurd."
   ;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>