<?php

if(isset($_POST['submit'])){
    $to = "romane.h@codeur.online";
    $from = $_POST['mail'];
    $site = "Romane Portfolio <noreply@romane-portfolio.com>";
    $nom = $_POST['nom'];
    $mess = $_POST['mess'];
    $subject = "$nom vous a envoyé un message depuis votre portfolio !";
    $message = $nom . "\n" . $from . " " . " vous a transmis un message :" . "\n\n" . $mess;

    $headers = "From:" . $site;
    mail($to,$subject,$message,$headers);


}

?>
