<?php

namespace Saratonite\phpcooltest;

class String{

	public $value;

	public $_string;

	public function __construct($string = ""){

		$this->_string = $string;

		$this->value = htmlspecialchars($this->_string);


	}

	public function length(){
		return strlen($this->_string);
	}

	public function __toString(){
		return $this->value;
	}

	public function __invoke(){

		echo $this->value;
	}

	
}