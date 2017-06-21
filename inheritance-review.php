<?php

class First{
	public $id = 23;
	protected $name = 'Gerard';
	//access for protected is only for inheritance
	public function saySomething($word){
		echo $word;
	}
}

class Second extends First{
	public function getName(){
		echo $this->name;

	}
}

$second = new Second;

echo $second->getName(); 

$first = new First;

echo $first->saySomething('hello');








?>