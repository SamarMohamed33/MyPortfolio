<?php
$name = $_POST['Name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
$mailheader = "From:" . $name . "<" . $email . ">\r\n";
$recipient = "samarmohamed.sm736@gmail.com";
mail($recipient, $subject, $message, $mailheader)
    or die("Error!");
echo '
   
   <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="fontawesome-free-6.2.0-web/fontawesome-free-6.2.0-web/css/all.min.css"
      rel="stylesheet"
    />
    <style>
      html {
        height: 100%;
      }
      body {
        font-size: 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: #adb3bc;
      }
      .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: white;
        padding: 50px;
        padding-top: 20px;
        width: 22%;
        text-align: center;
        border-radius: 15px;
        margin: auto;
      }
      h1 {
        margin-top: 0;
      }

      a {
        text-decoration: none;
        background-color: #63b841;
        padding: 15px;
        border: none;
        text-align: center;
        cursor: pointer;
        color: white;
        width: 100%;
        border-radius: 5px;
        display: inline-block;
        font-size: 20px;
        letter-spacing: 2px;
        margin-top: 10px;
      }
      a:hover {
        background-color: rgba(35, 39, 46, 80%);
      }
      i {
        color: #63b841;
        font-size: 100px;
        position: relative;
        bottom: 70px;
        background-color: white;
        border-radius: 50%;
        margin: 0;
      }
      @media screen and (max-width: 1000px) {
        .container {
          width: 70%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <i class="fa-sharp fa-solid fa-circle-check"></i>
      <h1>Thank you for reaching out to me</h1>
      <a href="https://samarmohamed33.github.io/MyPortfolio/"
        >Return to original site</a
      >
    </div>
  </body>
</html>

   
   
   
   
   ';
