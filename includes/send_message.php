<?php
if (isset($_POST['name'])) $name = strip_tags($_POST['name']);
if (isset($_POST['email']) $email = strip_tags($_POST['email']);
if (isset($_POST['subject'])) $subject = strip_tags($_POST['subject']);	
if (isset($_POST['message'])) $message = strip_tags($_POST['message']);
$mail_to = "*************";
$message = stripslashes($message);
$message = "From: (".$email."):\r\n\n" . $message;
/* $headers = "From: ".stripslashes($name)." <".$email.">\r\n"; */
$headers = "From: SAW O.S <noreply@geenwinst.nl>\r\n";
/* $headers .= "Reply-To: ".$email."\r\n"; */
$headers .= "Reply-To: noreply@geenwinst.nl\r\n";
$headers .= "X-Mailer: PHPMailer"."\r\n";
$headers .= "Content-Type: text/plain; charset=\"utf-8\"";
if (mail($mail_to,$subject,$message,$headers)){echo 1;}else{echo 0;}
?>
