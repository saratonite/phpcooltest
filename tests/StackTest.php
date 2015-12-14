<?php

use Saratonite\phpcooltest\Stack;
class StackTest extends PHPUnit_Framework_TestCase {

	protected $stk;

	// public function __construct(){
	// 	parent::__construct();

	// 	$this->stk = new Stack(4);
	// }

	public function setUp(){

		$this->stk = new Stack(5);

	}

	public function testStackPush(){


		$this->assertTrue($this->stk->push('One'));
		$this->assertEquals(1,$this->stk->getSize());

		$this->assertTrue($this->stk->push('Two'));

		$this->assertEquals('Two',$this->stk->top());

	}

	public function testGetSize(){
		$this->assertTrue($this->stk->push('One'));
		$this->assertEquals(1,$this->stk->getSize());
	}

	
	

}