<?php
	
	$contact = new contact();

	$contact->contactId = $_GET['id'];
	$contact->deleteContact();
	header ("location: index.php"); 

?> 




