<?php

	$user = new user();
	if (!empty($_POST['mail'])) {
	$user->setMail($_POST['mail']);
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
	if(empty($password)) {
      $message[] = 'Enter password';
    } elseif($password != $re_password) {
      	$message[] = 'Passwords do not match';
    } else {
    	$user->setPassword($_POST['password']);
    }
	$user->setRegDate(date('Y-m-d H:I:s'));
	
	if (empty($message)) {
		$user->addUser();
	} else {
		for_each ($message as $comment) {
			print ($comment.'<br />');
		}
	}

	print('Registration Successful! Now you can Sign In');

?>