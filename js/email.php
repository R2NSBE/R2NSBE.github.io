<?php
 $email = $_POST['email'];
 $msg = $_POST['msg'];
 $to = 'example@example.com'; //enter your email address
 $subject = 'Contact Form';
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= 'From: ' . $email . "\r\n";
 mail($to,$subject,$msg,$headers);
 header('Location: ../pages/contact.html');
 exit;
?>