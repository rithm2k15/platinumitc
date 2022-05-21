<?php 

if(isset($_POST['submit'])){
    $to = "mrmrg993@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    
    $subject = $_POST['subject'];
  $message = $_POST['message'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
