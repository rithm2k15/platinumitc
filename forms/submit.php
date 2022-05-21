<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$subject=$_POST['subject'];


		$to = 'info@platinumitc.com';
		$subject = "New Mail From Platinum ";
		$message .= nl2br("
			===============================\r\n

			Name : ".$name."
			Subject : ".$subject."
			Email : ".$email."
			message : ".$message."
			
			===============================\r\n
		");
			
		$headers =  'MIME-Version: 1.0' . "\r\n".
		'Content-Type: text/html; charset=ISO-8859-1' . "\r\n".
		'From:   PlatinumITC <info@platinumitc.com>' . "\r\n" .
		'Reply-To:  PlatinumITC <info@platinumitc.com>' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
									
		$response=mail($to, $subject, $message, $headers);
		
		
		if($response)
	{ echo "OK"; }
      else { echo "Something went wrong. Please try again."; }
	
?>