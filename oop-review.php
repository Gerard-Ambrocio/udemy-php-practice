<?php
/**
* 
*/
class User
{		
	private $id;
	private $username;
	private $email;
	private $password;


	public function __construct($username, $password){
		// echo 'Constructer Called'.'<br>';
		$this->username = $username;
		$this->password = $password;
	}
	public function register() 
	{	
		echo 'User Registered';
		
	}

	public function login(){
		
		$this->auth_user();


	}

	public function auth_user(){
		echo  $this->username. ' is authenticated ';
	}

	public function __destruct(){
		// echo 'Destructor Called';
	}
}

$User = new User('gerard','1234');

// $User->register();

$User->login();




?>