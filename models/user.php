<?php 

class user {
	
	private $id;
	private $firstName;
	private $lastName;
	private $mail;
	private $password;
	private $regDate;

	public function setId($id) {
		if (is_numeric($id)) {
			$this->id = $id;
			return TRUE;
			}
			else {
				retun FALSE;
	}
	public function getId() {
		return $this->$id;
	}
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}	
	public function getFistName() {
		return $this->firstName;
	}
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}	
	public function getLastName() {
		return $this->lastName;
	}
	public function setMail($mail) {
		$this->mail = $mail;
	}	
	public function getMail() {
		return $this->mail;
	}
	public function setPassword($password) {
		$this->password = md5($firstName);
	}	
	public function getPassword() {
		return $this->password;
	}
	public function setRegDatee($regDate) {
		$this->regDate = $regDate;
	}	
	public function getRegDate() {
		return $this->regDate;
	}


}

?>