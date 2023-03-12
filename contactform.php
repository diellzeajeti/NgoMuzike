<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NgoMuzikë</title>
    <link rel="stylesheet" href="css/contact-form.css">
</head>
<body>
    <form class="c-form" method="post" action="contact-process.php">
        <div class="contact-form">
            <h2>Na kontakto</h2>
            <label for="name">Emri</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mesazhi</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit" class="submit">
        </div>
    </form>

    

    <script src="js/contactform.js"></script>
</body>
</html>