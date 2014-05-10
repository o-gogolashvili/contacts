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

	public function __set($property, $value) {
		$functionName = 'set'.ucfirst($property);
		if (method_exists($functionName)) {
			$this->functionName();
		} else {
			$this->property = $value;
		}
	}

	public function __get($property) {
		$functionName = 'get'.ucfirst($property);
		if (method_exists($functionName)) {
			$this->funtionName();
		} else {
			if (property_exists($this, $property)) {
				return $this->property;
			}
		}
	}

	public function addContact() {
		$query = "insert into contacts set user_id='".$_SESSION['id']."', contact_id='".$this->id."'";
		mysql_query($query);
	}

	public function editContact() {
		/* ???????????????????? */
	}

	public function deleteContact() {
		$query = "delete from contacts where contqct_id='".$this->id."'";
		mysql_query($query);
	}
}

?>