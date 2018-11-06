<?php
// Check for empty fields

// $origin = isset($_SERVER['HTTP_ORIGIN'])? $_SERVER['HTTP_ORIGIN'] : ''; 
 
// $allow_origin = array( 
// 	'http://paulloo.t.cn'
// ); 
 
// if(in_array($origin, $allow_origin)){ 
// 	header('Access-Control-Allow-Origin:'.$origin); 
// }

header('Access-Control-Allow-Origin:*'); 

if(empty($_GET['name'])      ||
   empty($_GET['email'])     ||
   empty($_GET['phone'])     ||
   empty($_GET['message'])   ||
   !filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_GET['name']));
$email_address = strip_tags(htmlspecialchars($_GET['email']));
$phone = strip_tags(htmlspecialchars($_GET['phone']));
$message = strip_tags(htmlspecialchars($_GET['message']));

   
// Create the email and send the message
$to = 'dongpoding@126.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: dongpoding@126.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
