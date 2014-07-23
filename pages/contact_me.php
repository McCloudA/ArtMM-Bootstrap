<?php

// check if fields passed are empty
// if(empty($_POST['full_name'])  ||
//    empty($_POST['email'])     ||
//    empty($_POST['message'])	||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
// 	echo "No Valid E-Mail Provided!";
// 	return false;
//    }
	
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];


$to = 'mcclouda+ArtModel@gmail.com';

$email_subject = "Contact form submitted by:  $full_name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \n Name:  $full_name \n ".
				  "Email:  $email\n Message: \n\n $message";
$headers = "From: $to\n";
$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);
header("Location: /pages/contact-thanks.php");
return true;			
?>