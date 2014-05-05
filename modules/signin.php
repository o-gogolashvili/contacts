<?php

	session_start();
	print $_POST['mail'];
	print md5($_POST['password']);
	if (!empty($_POST)) {
		$query = 'select * from contacts where mail="'.$_POST['mail'].'" and password="'.md5($_POST['password']).'"';
		$result = mysql_query($query);
		$user=mysql_fetch_array();
		if (!empty($user)) {
			$_SESSION['mail'] = $user['mail'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['id'] = $user['id'];
		} else print ('Incorrect Details');
	}
	  
?>