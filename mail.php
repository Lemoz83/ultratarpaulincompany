<?php
//get data from form  
$name = $_POST['firstname'];
$email= $_POST['email'];
$number= $_POST['mobilenumber'];
$message= $_POST['message'];
$to = "lemomatrix@gmail.com"; 
$subject = "Mail From Ultra Tarpaulin";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n mobile number = " . $number . "\r\n Message =" . $message;
$headers = "From: noreply@ultratarpaulin.com" . "\r\n" .
"CC: febababyk@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>