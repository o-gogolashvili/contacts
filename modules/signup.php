<?php

	$user = new user();
	if (!empty($_POST['mail'])) {
		$query = "select * from users where mail='".$_POST['mail']."'";
		if($result = mysql_query($query)) {
			$arr = mysql_fetch_array($result);
			if(!empty($arr)) {
				$message[] = 'E-mail is already taken';
			} else {
				$user->setMail($_POST['mail']);
			}
		}
	} 
	else { 
		$message[] = 'Enter your e-mail';
	}
	if (!empty($_POST['firstName'])) {
		$user->setFirstName($_POST['firstName']);
	}
	else {
		$message[] = 'Enter your first name';
	}
	if (!empty($_POST['lastName'])) {
		$user->setLastName($_POST['lastName']);
	}
	else {
		$message[] = 'Enter your last name';
	}
	if(empty($_POST['password'])) {
		$message[] = 'Enter password';
	}
	elseif($_POST['password'] != $_POST['rePassword']) {
		$message[] = 'Passwords do not match';
	}
	else {
		$user->setPassword($_POST['password']);
	}
	
	$user->setRegDate(date('Y-m-d H:i:s'));
	
	if (empty($message)) {
		$user->addUser();
		print('<div class="alert alert-success"> Registration Successful! You now can Sign In </div>');
	}
	else {
		foreach ($message as $comment) {
			print ('<div class="alert alert-danger">'.$comment.'</div>');
		}
	}
?>