<?php

	session_start();
	
	if (!empty($_POST)) {
		$query = 'select * from contacts where mail="'.$_POST['mail'].'" and password="'.md5($_POST['password']).'"';
		$result = mysql_query($query);
		$user=mysql_fetch_array($result);
		if (!empty($user)) {
			$_SESSION['mail'] = $user['mail'];
			$_SESSION['password'] = $user['password'];
			$_SESSION['id'] = $user['id'];
		} else print ('Incorrect Details');
	}
	 
?>