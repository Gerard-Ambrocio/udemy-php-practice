<?php
// STATIC PART //
// class User{

// 	public $username;
// 	public static $minPassLength = 5;

// 	public static function validatePassword($password){
// 		if(strlen($password) >= self::$minPassLength){
// 			return true;
// 		}else {
// 			return false;
// 		}

// 	}

// }
// 	$password = 'password';

// 	if(User::validatePassword($password)){
// 		echo 'Password is valid';
// 	} else {
// 		echo "Password is NOT valid";
// 	}

// 	echo User::$minPassLength;



// ABSTRACT PART //

// abstract class Animal {
// 	public $name;
// 	public $color;

// 	public function describe(){
// 		return $this->name. ' is ' . $this->color;

// 	}

// 	abstract public function makeSound();
// }

// class Duck extends Animal{
// 	public function descri(){
// 		return parent::describe();
// 	}

// 	public function makeSound(){
// 		return'Quack';
// 	}
// }

// class Dog extends Animal{
// 	public function describe(){
// 		return parent::describe();
// 	}

// 	public function makeSound(){
// 		return 'Bark';
// 	}
// }

// $animal = new Dog();
// $animal->name = 'Ben';
// $animal->color = 'Yellow';
//  echo $animal->describe();
//  echo '<br>'.  $animal->makeSound();

// Classes to own files + autoload + final keyword //

// spl_autoload_register(function($class_name)){
// 	include $class_name . '.php';
// }

// final public function sayHello() {
// 	echo "Hello World"; // cannot be extended
// }

// Object Iteration

class People{
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';

	protected $person4 = 'John';
	private $person5 = 'Jen;';

	// function iterateObject(){
	// 	foreach($this as $key => $value){
	// 		print "$key => $value \n";

	// 	}
	// }

}

$people = new People;

foreach ($people as $key => $value){
print "$key => $value \n";
}

// $people->iterateObject();

?>
