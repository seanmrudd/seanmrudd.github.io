<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "sruddportfolioemail@yahoo.com";
    $headers = "From: " . $email;
    $text = "You have received an email from " . $name . "." . "\n\n" . $message;
    
    
    mail($mailTo, $subject, $text, $headers);
    
}

?>