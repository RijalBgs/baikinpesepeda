<?php
class adminModel {

	private $id_admin;
	private $username;
	private $password;
	private $email;

	public function getIdAdmin(){
		return $this->id_admin;
	}

	public function getUsername(){
		return $this->username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function getEmail(){
		return $this->email;
	}
	public function setIdAdmin($id_admin){
		$this->id_admin = $id_admin;
	}
	public function setUsername($username){
		$this->username = $username;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function setEmail($email){
		$this->email = $email;
	}

}
?>