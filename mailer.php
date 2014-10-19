<?php
/* Set e-mail recipient */
$myemail = "merchant.wozzon@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['inputName'], "Your Name");
$email = check_input($_POST['inputEmail'], "Your E-mail Address");
$subject = check_input($_POST['inputSubject'], "Message Subject");
$message = check_input($_POST['inputMessage'], "Your Message");

/* Let's prepare the message for the e-mail */
$message ="

Contact form message:

Name: $name
Email: $email
Subject: $subject

Message:
$message";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

exit();
?>