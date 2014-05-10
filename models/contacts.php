<?php

class contacts {
	private $id;
	private $contact_id;
	private $firstName;
	private $lastName;
	private $mobilePhone;
	private $homePhone;
	private $officePhone;
	private $photo;
	private $birthDate;
	private $sex;
	private $job;
	private $facebook;
	private $twitter;


	//general set function
	public function __set($property, $value) {
		$functionName = 'set'.ucfirst($property);
		if (method_exists($functionName)) {
			$this->$functionName($value);
		}
		else {
			$this->$property = $value;
		}
	}

	//general get function
	public function __get($property) {
		$functionName = 'get'.ucfirst($property);
		if (method_exists($functionName)) {
			$this->$funtionName();
		}
		else {
			if (property_exists($this, $property)) {
				return $this->$property;
			}
		}
	}

	public function addContact() {
		$query = "INSERT INTO contacts SET user_id='".$_SESSION['id']."', contact_id='".$this->id."'";
		mysql_query($query);
	}

	public function editContact() {
		/* ???????????????????? */
	}

	public function deleteContact() {
		$query = "DELETE FROM contacts WHERE contact_id='".$this->id."'";
		mysql_query($query);
	}
}

?>