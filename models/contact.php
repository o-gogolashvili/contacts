<?php

class contacts {
	private $id;
	private $contactId;
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

	public function setInformation() {
		$this->id = $_SESSION['id'];
		$this->firstName = $_POST['firstName'];
		$this->lastName = $_POST['lastName'];
		$this->mobilePhone = $_POST['mobilePhone'];
		$this->homePhone = $_POST['homePhone'];
		$this->officePhone = $_POST['officePhone'];
		//$this->photo = $_POST['photo'];
		$this->birthDate = $_POST['birthDate'];
		$this->sex = $_POST['sex'];
		$this->job = $_POST['job'];
		$this->facebook = $_POST['facebook'];
		$this->twitter = $_POST['twitter'];
	}

	public function addContact() {
		$query = "INSERT INTO contacts SET user_id= ".$this->id.", contact_first_name = '".$this->firstName."', 
				contact_last_name = '".$this->lastName."', mobile_phone = ".$this->mobilePhone.", home_phone = ".$this->homePhone.", office_phone = ".$this->officePhone.", 
				photo = '".$this->photo."', birth_date = ".$this->birthDate.", sex =".$this->sex.", job = '".$this->job."', facebook = '".$this->facebook."', 
				twitter = '".$this->twitter."'";
		if(mysql_query($query));
	}

	public function editContact() {
		$query = "UPDATE INTO contacts SET contact_first_name = '".$this->firstName."', contact_last_name = '".$this->lastName."', mobile_phone = ".$this->mobilePhone.", 
				home_phone = ".$this->homePhone.", office_phone = ".$this->officePhone.", photo = '".$this->photo."', birth_date = ".$this->birthDate.", 
				sex =".$this->sex.", job = '".$this->job."', facebook = '".$this->facebook."', twitter = '".$this->twitter."' where contact_id = ".$this->contactId;
		mysql_query($query);
	}

	public function deleteContact() {
		$query = "DELETE FROM contacts WHERE contact_id=".$this->contactId;
		mysql_query($query);
	}
}

?>