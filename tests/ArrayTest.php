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
    
    public function testPop(){
        array_push($this->arr1,'Google');
        $this->assertEquals(1,count($this->arr1));
        array_push($this->arr1,'Bing');
        
        $this->assertEquals("Bing",$this->arr1[1]);
        array_pop($this->arr1);
        $this->assertEquals(1,count($this->arr1));
        $this->assertEquals("Google",$this->arr1[0]);
    }
    
    public function testUnshiftShift(){
        
        ## Filo
        
        array_unshift($this->arr1,"Foo");
        array_unshift($this->arr1,"Bar");
        $this->assertEquals("Bar",$this->arr1[0]);
        array_shift($this->arr1);
        $this->assertEquals(1,count($this->arr1),"Cool");
        
        $this->assertEquals("Foo",$this->arr1[0]);
    }
    
    
}