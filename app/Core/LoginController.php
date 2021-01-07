<?php 
require __DIR__ . '/../Service/UserService.php';

class LoginController extends UserService{
	protected $username;
	protected $password;
	public $message;

	public function getData($username, $password){
		$this->username = $username;
		$this->password = $password;

		return $this->validateData();
	}

	public function validateData(){
		if(empty($this->username)|| empty($this->password)){
			$this->message = "Blank Username and Password";
			return $this->message;
	 		header('location:login.php');
		}else{
			return $this->Login();
		}
	}
	
	public function Login(){
		$row = $this->SQLLogin($this->username, $this->password)->FetchArray();
		if($row && ($row['username'] == $this->username || $row['password'] == md5($this->password))){
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			header('location:administrator.php');
			}else{
			$this->message = "Incorrect Username and Password";
			return $this->message;
			header('location:login.php');
		}
	}
}
?>