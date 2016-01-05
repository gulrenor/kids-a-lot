<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 1;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'gulrenor@gmail.com';                 // SMTP username
$mail->Password = 'kanvtnvlopstgbnp';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'gulrenor@gmail.com';
$mail->FromName = 'gulrenor';
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('gulrenor@gmail.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'KAL email test';
$mail->Body    = 'This is a test of the KAL <b>website mailer<b>';
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}