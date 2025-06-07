<?php
if(isset( $_POST['firstname']))
$firstname = $_POST['firstname'];
if(isset( $_POST['address']))
$address = $_POST['address'];
if(isset( $_POST['cp']))
$cp = $_POST['cp'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];


$content="\n firstname: $firstname \n address: $address \n cp: $cp \n phone: $phone \n email: $email";
$recipient = "iturralderaul@gmail.com, danielarossi@ummotosmexico.mx";
mail($recipient, $subject, $content) or die("Error!");
header("Location: http://ummotosmexico.mx/umw/form_envio_exit.html"); 
      exit;
?>