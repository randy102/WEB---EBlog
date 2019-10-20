<?php
	include $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	define("USER","welldey2000@gmail.com");
	define("PASS","quangpronhat");

function sendMail($to,$title,$cont){

	$mail = new PHPMailer;
	                               
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();            
	//Set SMTP host name                          
	$mail->Host = "relay-hosting.secureserver.net";
	//Set this to true if SMTP host requires authentication to send email
	 
	$mail->SMTPAuth = false;
	$mail->SMTPSecure = false;                         
	//Provide username and password     
	$mail->Username = USER;                 
	$mail->Password = PASS;                           
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";                           
	//Set TCP port to connect to 
	$mail->Port = 25;                                   
	$mail->SMTPDebug = 4;
	$mail->From = USER;
	$mail->FromName = "Admin";

	$mail->smtpConnect(
	    array(
	        "ssl" => array(
	            "verify_peer" => false,
	            "verify_peer_name" => false,
	            "allow_self_signed" => true
	        )
	    )
	);

	$mail->addAddress($to, $to);

	$mail->isHTML(true);

	$mail->Subject = $title;
	$mail->Body = $cont;
	$mail->AltBody = "This is the plain text version of the email content";

	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
	    echo "Message has been sent successfully";
	}

	}
?>
