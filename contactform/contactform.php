<?php

$email_to = "juhlmann75@gmail.com";
$email_subject = $_POST['subject'];

$name = $_POST['name']; // required
$email_from = $_POST['email']; // required
$comments = $_POST['message']; // required

$email_message = "Form details below.\n\n";

 
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

 

$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Message: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);  
echo json_encode('OK');
?>
