<?php
class ArrayTest extends PHPUnit_Framework_TestCase{


	protected $arr1 = [];

	protected $arr2 = [];

	public function setUp(){


	}

	public function testEmpty(){


		$this->assertEmpty($this->arr1);
		$this->assertEmpty($this->arr2);
	}

	public function testPush(){

		// Stack LIFO
		
		array_push($this->arr1,'Football');

		$this->assertCount(1,$this->arr1);

		array_push($this->arr1,'Cricket');

		$this->assertCount(2,$this->arr1);

		$this->assertEquals('Cricket',$this->arr1[1]);

	}
}