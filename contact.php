<?php


if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comments = $_POST['comments'];


    $ToEmail = 'hsjs@yahoo.com';

    
    $EmailSubject = 'Site Contact Form';


    $mailheader = "From: ".$_POST["email"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n ";
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>";
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
    $MESSAGE_BODY .= "Phone: ".$_POST["phone"]."<br>";
    $MESSAGE_BODY .= "Subject: ".$_POST["Subject"]."<br>";
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comments"])."<br>";
    
    if(mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader))
   

}


?>