<?php

	$user = new user();
	$user->setMail($_POST['mail']);
	$user->setFirstName($_POST['firstName']);
	$user->setLastName($_POST['lastName']);
	$user->setPassword($_POST['password']);
	$user->setRegDate(date('Y-m-d'));
	
	$user->addUser();

	print('Registration Successful! Now you can Sign In');

?>