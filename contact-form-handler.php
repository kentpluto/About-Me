<?php
	$name=$_POST['name'];
	$visitor_eail =$_POST['email'];
	$message=$_POST['message'];


	$email_from="kentsweb.com";

	$email_subject="New Form Submission";

	$email_body= "User Name: $name.\n";
					"User Email: $visitor_email.\n";
						"User Message: &message.\n";


$to="ebeyekent@gmail.com";

$headers="Fro: $email_from\r\n";

$header="Reply-to: $visitor_email.\n;

$email_subject,$email_body,$header);

header("location: index.html");


?>