<?php


use Saratonite\phpcooltest\String;

class StringTest extends PHPUnit_Framework_TestCase{

	private $str;


	public function setUp(){

		$this->str = new String("hello");
	}


	public function testLength(){

		$this->assertSame(5,$this->str->length());
	}

}