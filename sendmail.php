<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Origin: null');
    header("Content-Type: application/json; charset=UTF-8");    
    header("Access-Control-Allow-Methods: POST, DELETE, OPTIONS");    
    header("Access-Control-Max-Age: 3600");    
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With, Origin");    
    //we need to get our variables first
    
    $email_to =   'joshhnath@gmail.com'; //the address to which the email will be sent
    $name     =   $_POST['name'];  
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];
    
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know 
     who are we replying to. */
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Access-Control-Allow-Origin: *\r\n";
    $headers .= "Access-Control-Allow-Origin: null\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..      
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent    
    }
?>
