<?php
namespace Sartonite\phpcooltest\Tests;
require(__DIR__."/../vendor/autoload.php");


class HelloTest extends \PHPUnit_Framework_TestCase {

	public function testHello(){
		$m = new \Saratonite\phpcooltest\Hello();
		$this->assertSame('Hello World',$m->sayHello());
	}

}