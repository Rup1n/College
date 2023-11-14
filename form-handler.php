<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'info@yourwebsite.com';
$email_subject = 'new form submition';
$email_body = 'User Name: $name.\n'.
'User Email: $visitor_email.\n'.
'subject: $subject .\n'.
'User Message: $message .\n';
$to = 'useremail@email.com'
;
$headers = 'Form: $email-from \r\n';
$headers = 'Reply-to: $visitor_email \r\n';
mail($to,$email_subject,$email_body,$headers);
header('Location: contact.hmtl'):
?>