<?php 
require 'PHPMailer/PHPMailerAutoload.php';
echo "string";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                          // Enable verbose debug output

$mail->isSMTP();                                        // Set mailer to use SMTP 
$mail->Host = 'smtp.sendgrid.net';             // Specify main/backup SMTP servers 
$mail->SMTPAuth = true;                           // Enable SMTP authentication 
$mail->Username = 'azure_cdf577451af1ffd1d93f2d69ce47caa2@azure.com';//'YOUR USERNAME';    // SMTP username 
$mail->Password = 'SLDLSLKsdsd45345';//'YOUR PASSWORD';    // SMTP password 
$mail->SMTPSecure = 'tls';                        // Enable TLS/SSL encryption 
$mail->Port = 587;                                      // TCP port to connect to

$mail->From = '143net4u@gmail.com'; 
$mail->FromName = 'From Bibliography Manager'; 
$mail->addAddress('adil143m@gmail.com', 'Support');     // Add a recipient

$mail->WordWrap = 50;                              // Set word wrap to 50 characters 
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Your Email Verification'; 
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';

if(!$mail->send()) { 
    echo 'Message could not be sent.'; 
    echo 'Mailer Error: ' . $mail->ErrorInfo; 
} else { 
    echo 'Message has been sent'; 
}

?>