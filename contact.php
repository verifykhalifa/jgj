<?php
$ip = getenv("REMOTE_ADDR");	

print_r($_POST);

if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
 
		$to = "info@jgjglobalservices.com";
		
		
         $subject = "New Website Message: JGJglobalservices    ";
		 
		        $message = "------NEW CONTACT FORM SUBMISSION ------"."\r\n";
            $message .= "Name            || ".$name."\r\n";
            $message .= "Email           || ".$email."\r\n";
		        $message .= "Phone Number    || ".$phone."\r\n";
            $message .= "Message         || ".$msg."\r\n";
		        $header   = "Content type: jGJGLOBALSERVICES \r\n";
            $header  .= "MIME-Version: 1.0\r\n";
            $header  .= "Content-type: text/html\r\n";
		 
		 mail ($to,$subject,$message,$header);
}




?>  


