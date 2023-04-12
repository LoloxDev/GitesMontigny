﻿<?php

// Adresse email du destinataire
$to = 'contact@pisserotte-kelidoine.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $tel = trim(stripslashes($_POST['tel']));
   $subject = trim(stripslashes($_POST['subject']));
   $contact_message = trim(stripslashes($_POST['message']));

   
	if ($subject == '') { $subject = "Formulaire de contact"; }

   // Informations de l'expediteur
   $message = "Mail provenant de: " . $name . "<br />";
	$message .= "Adresse email: " . $email . "<br />";
   $message .= "Telephone: " . $tel . "<br />";
   $message .= "Message: <br />";
   $message .= nl2br($contact_message);
   $message .= "<br /> ----- <br /> Cet email a ete envoye depuis le site " . url() . " <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("sendmail_from", $to); // for windows server
   $mail = mail($to, $subject, $message, $headers);

	if ($mail) {   
      
      

      header('Location: ../pages/fr/index.php?ind='.($_GET['ind']).'&pg=dis&msg=true');
      exit();
      

   } else { echo "Quelque chose ne marche pas. S'il vous plait reesayez ou contactez la maintenance."; }

}

?>