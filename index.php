<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <form class="contact-form" action="includes/mailer.php" method="POST">
        <p>Contact Form</p>
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send</button>
        </form>
        <div><?php if(isset($_GET["mailsend"])){
            if($_GET["mailsend"] === "succeeded"){
                echo "<p style='text-align: center; background-color: #2bca1d; margin-top: 5px;'>Successfully Send!</p>";
            }
            else if($_GET["mailsend"] === "failed"){
                echo "<p style='text-align: center; background-color: #f53d3d; margin-top: 5px;'>Failed to Send!</p>";
            }
        } ?></div>
    </main>
</body>
</html>
<?php
    // ---To send and email without interface--
    // $to_mail = "thriplebeecontact@gmail.com";
    // $subject = "Simple Email";
    // $body = "This is a sample message body!";
    // $headers = "From: champr1313@gmail.com";

    // if(mail($to_mail, $subject, $body, $headers)){
    //     echo "Success!";
    // }
    // else{
    //     echo "Failed!";
    // }
?>

