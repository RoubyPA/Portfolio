<?php
	$TO = "contact@parouby.fr";
	$h  = "From: " . $TO;
	$subject = "[CONTACTFORM] " . $_POST['realname'] . " - " . $TO;
	$message = "replit to: " . $_POST['email'] . "\n\n";

	$message .= $_POST['message'];

	mail($TO, $subject, $message, $h);
	
	include("thanks.php");
?> 
