<?php
if(isset( $_POST['firstname']))
$firstname = $_POST['firstname'];
if(isset( $_POST['lastname']))
$lastname = $_POST['lastname'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];


$content="\n firstname: $firstname \n lastname: $lastname \n phone: $phone \n email: $email";
$recipient = "iturralderaul@gmail.com";
mail($recipient, $subject, $content) or die("Error!");
header("Location: http://ummotosmexico.mx/umw/form_exit.html"); 
      exit;
?> 