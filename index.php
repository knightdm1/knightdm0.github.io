<?php

 $to_email = "danima5689dm@gmail.com";
 $subject = "Simple Email Testing via PHP";
 $body = "ok";
 $headers = "From: sender\'s email";

 if (mail($to_email, $subject, $body, $headers)) {
   echo "Email successfully sent to $to_email...";
 } else {
   echo "Email sending failed...";
 }

?>

