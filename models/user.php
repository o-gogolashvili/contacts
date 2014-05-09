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
			return FALSE;
		}
	}
	public function getId() {
		return $this->$id;
	}
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}	
	public function getFirstName() {
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
		$this->password = $password;
	}	
	public function getPassword() {
		return $this->password;
	}
	public function setRegDate($regDate) {
		$this->regDate = $regDate;
	}	
	public function getRegDate() {
		return $this->regDate;
	}
	public function addUser() {
		if (!empty($this->firstName)
			&& !empty($this->lastName)
			&& !empty($this->mail)
			&& !empty($this->password)
			&& !empty($this->regDate)) {
        	$query = "INSERT INTO users SET first_name='".$this->firstName."', last_name='".$this->lastName."', mail='".$this->mail."', password='".md5($this->password)."', reg_date ='".$this->regDate."'";
        	mysql_query($query);
  		}
	}
}
?>