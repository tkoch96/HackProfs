<?php

date_default_timezone_set('Etc/UTC');

require 'PHPMailer-master/PHPMailerAutoload.php';
$fp = fopen('ProfEmails.txt','r');

while(true) {
	$attch = fread($fp,filesize($fp));
	//Create a new PHPMailer instance
	$mail = new PHPMailer;

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 2;

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'smtp.gmail.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
	$mail->SMTPSecure = 'tls';

	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "tomkoch123@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "pencil123";

	//Set who the message is to be sent from
	$mail->setFrom('tomkoch123@gmail.com', 'Thomas Koch');



	//Set who the message is to be sent to
	$mail->addAddress('tomkoch96@yahoo.com', 'Tommy Boy');

	//Set the subject line
	$mail->Subject = 'PHPMailer GMail SMTP test';

	//Body
	$mail->Body = 'Attached you will find your text files.';

	//Attach an image file
	$mail->addAttachment($attch.'.txt');

	//send the message, check for errors
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
}