<?php
namespace Sartonite\phpcooltest\Tests;

class HelloTest extends \PHPUnit_Framework_TestCase {

	public function testHello(){
		$m = new \Saratonite\phpcooltest\Hello();
		$this->assertSame('Hello World',$m->sayHello());
	}

}