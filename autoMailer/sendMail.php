<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

// Load Composer's autoloader


require '../vendor/autoload.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$mail_FROM = 'aze@aze.fr'; // adresse mail de l'expéditeur
$mail_TO = 'aze@aze.fr'; // adresse mail de la boite de reception
$pass = 'xxxxx'; // mot de passe mail de l'expéditeur
$SMTP = 'SSL0.OVH.NET'; // adresse SMTP
$port = 587; // port SMTP


if(isset($_GET['send']) && $_GET['send'] == 'devis'){
    $service = '<p><strong>Service sélèctionné :</strong> aucun </p>';
    $titre_message = 'ANL DEVIS => ' . $_POST['name'];
    $mail_Envoi = $_POST['mail'];
    
    if(isset($_POST['carrosserie']) || isset($_POST['peinture']) || isset($_POST['mecanique']) || isset($_POST['autre']) ){
        $service = '<p><strong>Service sélèctionné : </strong>';
        if(isset($_POST['carrosserie'])){
            $service .= ' carrosserie ';
        }
        if(isset($_POST['peinture'])){
            $service .= ' peinture ';
        }
        if(isset($_POST['mecanique'])){
            $service .= ' mecanique ';
        }
        if(isset($_POST['autre'])){
            $service .= ' autre ';
        }
        $service .= '</p>';
    }
    
    $body = '<p>' . $_POST['name'] .' Souhaite un DEVIS </p>' .
    '<p><strong>Mail : </strong>' . $_POST['mail'] . '</p>' .
    '<p><strong>Téléphone : </strong>' . $_POST['phone'] . '</p>' . 
    $service .
    '<p><strong>Contenu du message : </strong><br />' . $_POST['content'] . '</p>';
    
    try {
        //Server settings
        //$mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->CharSet = 'UTF-8';                                   // Encription caracteres
        $mail->Host       = $SMTP;                                  // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $mail_FROM;                             // SMTP username
        $mail->Password   = $pass;                                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $port;                                  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($mail_FROM, $titre_message);         
        $mail->addAddress($mail_TO);                                // Mail de destination
        //$mail->addAddress('ellen@example.com');                   // Name is optional
    
        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $titre_message;
        $mail->Body    = $body;
        $mail->AltBody = 'message';
    
        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header('location: ../devis.php');
    exit;
}

if(isset($_GET['send']) && $_GET['send'] == 'contact'){

    $titre_message = 'ANL CONTACT => ' . $_POST['name'];
    $mail_Envoi = $_POST['mail'];


    $body = '<p>' . $_POST['name'] .' Souhaite entrer en CONTACT </p>' .
    '<p><strong>Mail : </strong>' . $_POST['mail'] . '</p>' .
    '<p><strong>Téléphone : </strong>' . $_POST['phone'] . '</p>' . 
    '<p><strong>Contenu du message : </strong><br />' . $_POST['content'] . '</p>';
    
    try {
        //Server settings
        //$mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->CharSet = 'UTF-8';                                   // Encription caracteres
        $mail->Host       = $SMTP;                                  // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $mail_FROM;                             // SMTP username
        $mail->Password   = $pass;                                  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port   = $port;                                      // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($mail_FROM, $titre_message);         
        $mail->addAddress($mail_TO);                                // Mail de destination
        //$mail->addAddress('ellen@example.com');                   // Name is optional
    
        
    
        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $titre_message;
        $mail->Body    = $body;
        $mail->AltBody = 'message';
    
        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    header('location: ../contact.php');
    exit;
}

header('location: ../index.php');
exit;