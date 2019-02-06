<?php

echo 'c\'est toi qui beug et pas le serveur!!!';

     $to      = 'dalmatcompte1@hotmail.fr';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: webmaster@example.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);

?>
