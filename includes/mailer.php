<?php
    
    if (isset($_POST['submit'])) {
        
        //Form Data
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        //To
        $recipient = "leopxon@gmail.com";
        
        //Dummy Subject | For identification
        $subject = "Website Contacts";

        //Email Body
        $email_content = $cont_subject."\n\nYou have recieved an email from ".$name."(".$email.").\n\n".$message;

        //From
        $email_headers = "From: website@web.com";

        if (mail($recipient, $subject, $email_content, $email_headers)) {
            header("Location: ../index.php?mailsend=succeeded");
        } else {
            header("Location: ../index.php?mailsend=failed");
        }

    }

