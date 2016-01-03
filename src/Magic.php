<?php
namespace Saratonite\phpcooltest;
class Magic{

	private $subject;

	private $data = [];

	public function __construct($subject = ""){
		$this->subject = $subject;
	}

	public function __toString(){
		return $this->subject."\n";
	}

	public function __invoke(){
		echo "You called the invoke";
	}

	public function __call($name,$args=[]){

		echo "You called ".$name."\n";
		var_dump($args);

	}

	public static function __callStatic($name,$args){
		echo "You called a STATIC function ".$name."\n";
	}

	public function __get($name){
		if(array_key_exists($name, $this->data)){
			return $this->data[$name];
		}
		return false;
	}

	public function __set($name,$value){
		//echo "You trying to set $name with $value \n";
		$this->data[$name] = $value;
	}
}