<?php

$message_sent = false

if(isset($_POST['email']) && $_POST['email'] != '') {
    //use filter in php to validate email
    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //variables to get data 
        $name = $_POST['name']
        $visitor_email = $_POST['email']
        $subject = $_POST['subject']
        $message = $_POST['message']

        // setup the email
        $email_from = 'info@foodtruckpak.com'
        $email_subject = 'New Form Submission'
        $email_body = "User Name: $name.\n". 
                        "User Email: $visitor_email.\n". 
                        "Subject: $subject.\n".
                        "User Message: $message.\n";
        $to = 'myfoodtruck@gmail.com';
        //concatinate the headers variable  \r\n is line break 
        //headers are for from and replay addresses
        $headers = "From: $email_from \r\n";
        $headers .="Reply-To: $visitor_email \r\n"
        //send the message
        mail($to, $email_subject, $email_body, $headers);
        header("location: contact.html")

        $message_sent = true
    } 
}


//above code will without if...send email every time the page got refreshed, we need to add validation







?>