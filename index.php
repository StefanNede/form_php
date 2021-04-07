<?php

$forms = fopen("forms.txt", "r");
$info =  nl2br(fread($forms, filesize("forms.txt")));
fclose($forms);
print <<<EOF
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>Form submission</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <form action="submit.php" method="post" class="form">
            <label for="name">Name:</label>
            <input type="text" name="name" placeholder="name" id="name" />
            <br/>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="email" id="email" />
            <br/>
            <label for="message">Message:</label>
            <textarea type="text" name="message" placeholder="write your message" id="message"></textarea>
            <br/>
            <input type="submit"/>
       </form>
       <div class="submissions_container">
            Previous submissions
            <br/>
            <button class="see_submissions">See submissions</button>
            <div class="submissions">
                $info
            </div>
       </div>
       <script src="app.js"></script>
    </body>
    </html>
EOF;
