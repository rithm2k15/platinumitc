<?php
if ( ($_POST['name']!="") && ($_POST['email']!="")){
$name = $_POST['name'];
$email = $_POST['email'];
$message2 = $_POST['message2'];
$subject2 = $_POST['subject2'];


		$to = 'info@platinumitc.com';
		$subject = "New Mail From Platinum ";
		$message .= nl2br("
			===============================\r\n

			Name : ".$name."
			Subject : ".$subject2."
			Email : ".$email."
			message : ".$message2."
			
			===============================\r\n
		");


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$email.">" . "\r\n";
$sent = mail($to,$subject,$message,$headers);
if($sent){
	echo "<span style='color:green; font-weight:bold;'>
	Thank you for contacting us, we will get back to you shortly.
	</span>";
}
else{
	echo "<span style='color:red; font-weight:bold;'>
	Sorry! Your form submission is failed.
	</span>";
	}
}
?>