<?php

if(isset($_GET['email']))
{
/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "babuhosp@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "project123";
//Set who the message is to be sent from
$mail->setFrom('infinity11@gmail.com', 'E-Health Solutions Pvt Ltd');
//Set an alternative reply-to address
//$mail->addReplyTo('registration@melange2k15.in', '');

//Set who the message is to be sent to
$mail->addAddress($_GET['email'], '');
//CC the mail to self
$mail->AddCC('babuhosp@gmail.com');
//Set the subject line
$mail->Subject = 'Contact Reply';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

$mail->Body= "From E-Health Solutions Pvt Ltd.<br>".$_GET['msg']."";
//Replace the plain text body with one created manually
$mail->AltBody = "From E-Health Solutions Pvt Ltd.<br>";
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: index.php");
    
}
}