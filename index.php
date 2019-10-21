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
        <p>Send Email</p>
            <input type="text" name="fullname" placeholder="Full Name">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send</button>
        </form>
    </main>
</body>
</html>

