<?php

header('content-type: application/json');

	$o = new stdClass();
	$o->status = 'success';
	echo json_encode($o);

	$email_to = "kontakt@hydrogreen.pl"; // Replace by your email address
	$email = $_POST["email"];
	$text = "Kolejna osoba, która chce być powiadomiona o uruchomieniu nowej strony: $email";

	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
	$headers .= "From:<$email>\n";

	mail($email_to, "Message", $text, $headers);

?>
