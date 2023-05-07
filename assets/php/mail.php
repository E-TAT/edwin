<?php

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "edwinjames0123@gmail.com";

$subject = "TAT Portfolio";
$txt =" Name = ". $name . "\r\n Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: edwin@tatfolio.com" . "\r\n" .
"CC: ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:../../index.html");
echo alert("Message Sent Successfully"); 
?>
