<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$form = "from: " . $name . "\n with email: " . $email . "\n The message is: " . $message . "\n" . "\n";
$send = fopen("forms.txt", "a");
fwrite($send, $form);
fclose($send);

print <<<EOF
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Submitted by $name</title>
            <link rel="stylesheet" href="style.css"></link>
        </head>
        <body>
            Thanks for submitting a form $name
            <a href="index.php">go back to website</a>
        </body>
        </html>
    EOF;
