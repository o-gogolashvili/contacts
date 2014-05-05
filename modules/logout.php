<?php
 
	$_SESSION = array();
	session_destroy();

	header('location: /contacts/index.php');

?>