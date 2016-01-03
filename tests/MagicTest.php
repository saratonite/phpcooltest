<?php
class MagicTest extends PHPUnit_Framework_TestCase{

	protected $magic;

	public function setUp(){

		$this->magic = new \Saratonite\phpcooltest\Magic("Its magic");


	}

	public function testTostring(){

		$thestring = (string) $this->magic;

		$this->assertEquals($thestring,"Its magic\n");
	}
}