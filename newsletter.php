<?php
if (  ($_POST['email']!="")){

$email = $_POST['email'];



		$to = 'info@platinumitc.com';
		$subject = "Subscription Mail From Platinum ";
		$message .= nl2br("
			===============================\r\n

		
			Email : ".$email."
		
			
			===============================\r\n
		");


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
	echo "<span style='color:green; font-weight:bold;'>
	Thank you for subscribing us.
	</span>";
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
	}
}
?>