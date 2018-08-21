<?php

if(isset($_POST['submit'])){ //method post in html
    $name = $_POST['name']; //value of input with name of name
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "l.kre.bsn@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an Email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}