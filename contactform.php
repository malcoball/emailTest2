<?php
if (isset($_POST['submit'])){
    $name       = $_POST['name']
    $subject    = $_POST['subject']
    $mail       = $_POST['mail']
    $message    = $_POST['message']

    $mailTo = 'adam_shaw1994@hotmail.co.uk';
    $headers = "From: ".$mail;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}