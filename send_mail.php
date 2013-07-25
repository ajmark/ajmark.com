<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "alexmark650@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "contact.php";
$error_page = "error_message.php";
$thankyou_page = "thank_you.php";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$name = $_POST['name'] ;
$email_address = $_POST['email_address'] ;
$comments = $_POST['comments'] ;

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_POST['email_address'])) {
header( "Location: $feedback_page" );
}

// If the form fields are empty, redirect to the error page.
elseif (empty($email_address) || empty($comments) || empty($name)) {
header( "Location: $error_page" );
}



// If we passed all previous tests, send the email then redirect to the thank you page.
else {
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$content = "<b>Name:</b> $name<br />" . 
			"<b>Email:</b> $email_address<br />" .
			"<b>Message:</b> <br />$comments";
mail( "$webmaster_email", "Feedback Form Results", $content, $headers );
header( "Location: $thankyou_page" );
}
?>