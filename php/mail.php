<?php

$to = "contact@joemethven.com";
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$title = $_REQUEST['subject'];

$fields = array();
$fields{"name"} = "Name:";
$fields{"email"} = "\nEmail:";
$fields{"message"} = "\nMessage:\n\n";

$body = "";
$format = "%s %s \n";

foreach ($fields as $a => $b) {
	$body .= sprintf($format, $b, $_REQUEST[$a]);
}

$send = mail($to, $subject, $body, $headers);

?>
