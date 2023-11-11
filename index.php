<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];

$to = "danima5689dm@gmail.com";
$subject = "Mail From knightdm";
$txt ="Name = ". $name . "\r\n  Email = " . $email . ";
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
   

