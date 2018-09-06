<?php
ob_start();



require_once('php_mailer/email_config.php');
require('php_mailer/phpmailer/PHPMailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->SMTPDebug = 0;           // Enable verbose debug output. Change to 0 to disable debugging output.

$mail->isSMTP();                // Set mailer to use SMTP.
$mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers.
$mail->SMTPAuth = true;         // Enable SMTP authentication

$mail->Username = EMAIL_USER;   // SMTP username
$mail->Password = EMAIL_PASS;   // SMTP password
$mail->SMTPSecure = 'tls';      // Enable TLS encryption, `ssl` also accepted, but TLS is a newer more-secure encryption
$mail->Port = 587;              // TCP port to connect to gmail (normal port)
$options = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->smtpConnect($options);
$mail->From = 'aliawilkinsondev@gmail.com';  // sender's email address (shows in "From" field) //new fake email
$mail->FromName = 'alia mailer daemon';   // sender's name (shows in "From" field)
$mail->addAddress('aliawilkinson@gmail.com', 'og alia');  // Add a recipient, my real email address $mail->addAddress('aliawilkinson@gmail.com', 'Alia Wilkinson');
//$mail->addAddress('ellen@example.com');                        // Name is optional
$mail->addReplyTo($_POST['your-email']);                          // Add a reply-to address
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'contact form email from aliawilkinson.com';
$mail->Body    = "Message for you, mistress: 
    <br> name: {$_POST['your-name']}
    <br> email: {$_POST['your-email']} 
    <br> message: ".nl2br($_POST['your-message']);
$mail->AltBody = htmlentities($_POST['your-message']);

$message = '';
if(!$mail->send()) {
    $message = 'Message could not be sent. Please contact Alia through linkedin.';
} else {
    $message = 'Message has been sent';
}
ob_end_clean();

print($message);
?>
