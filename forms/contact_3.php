<?php

  
  $receiving_email_address = 'admin@platinumitc.com';

  $to = $receiving_email_address;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
$message = $_POST['message'];

  
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $email->send();
?>
