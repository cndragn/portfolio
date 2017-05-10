<?php

    $to = "cndragn@gmail.com";


if (!isset($_POST[name]) || empty($_POST[name]))
{
echo "Fill in the name field!";
exit;
}
else
{
$name = $_POST[name];
}

$subject = "New Message from CandiceDavidson.";



 if (empty($_POST["email"])) {
    echo "Enter your email address!";
    exit;
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email address is invalid!";
      exit;
    }
    else
    {
    $email = $_POST[email];
    }
  }

if (!isset($_POST[message]) || empty($_POST[message]))
{
echo "Don't forget to include a message!!";
exit;
}
else
{
$message = $_POST[message];
}

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n"; 
$headers .= "From: " . $name . " <" . $email . ">" . "\r\n";

if (mail($to, $subject, $message, $headers))
{
echo"Email Sent !!!\n";
}
else
{
echo"<p>Error!</p>\n";
echo"<p>The mail() function failed.</p>";
}

?>