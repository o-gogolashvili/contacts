<?php

	$user = new user();
	if (!empty($_POST['mail'])) {
		$query = "select * from contacts where mail='".$_POST['mail']."'";
		if($result = mysql_query($query)) {
			$arr = mysql_fetch_array($result);
			if(!empty($arr)) {
				$message[] = 'Username already exists';
			} else {
				$user->setMail($_POST['mail']);
			}
		}
	} else { $message[] = 'Enter your mail';
	}
	if (!empty($_POST['firstName'])) {
	$user->setFirstName($_POST['firstName']);
	} else { $message[] = 'Enter your first name';
	}
	if (!empty($_POST['lastName'])) {
	$user->setLastName($_POST['lastName']);
	} else { $message[] = 'Enter your last name';
	}
	if(empty($_POST['password'])) {
		$message[] = 'Enter password';
	} elseif($_POST['password'] != $_POST['rePassword']) {
		$message[] = 'Passwords do not match';
	} else {
		$user->setPassword($_POST['password']);
	}
	$user->setRegDate(date('Y-m-d H:i:s'));
	
	if (empty($message)) {
		$user->addUser();
	} else {
		foreach ($message as $comment) {
			print ($comment.'<br />');
		}
	}

	print('Registration Successful! Now you can Sign In');

?>