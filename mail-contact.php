<?php

	$to = "wpoceanmarketing@gmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$service = $_POST['service'];
	$note = $_POST['note'];

	$subject = "Form submission";

	$message = $sender_name . " has send the contact message. His / Her contact Phone Number is " . $phone . " and his / her Age is "  . $age . " and his / her Gender is "  . $gender . " and his / her Service is "  . $service . ". He / she wrote the following... ". "\n\n" . $note;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>