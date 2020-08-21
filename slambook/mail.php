<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['comments']))
$message = $_POST['comments'];

$subject = "Re: SLAM BOOK";

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "snehacs9936797947@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
echo "<script>alert('Thankyou $name !! for your feedback we will get you soon....');window.location.href='index.php';</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="index.php"><button>HOME</button></a>
</body>
</html>

