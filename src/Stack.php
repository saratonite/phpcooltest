<?php
namespace Saratonite\phpcooltest;

/**
 *
 *  A Stack implementation in php
 *  https://en.wikibooks.org/wiki/Data_Structures/Stacks_and_Queues#Stacks_and_Queues
 */
class Stack {


	protected $data = [];

	protected $size = 0;


	public function __construct($size){

		$this->size = $size;

	}



	public function push($item){

		if(!$this->isFull()){
			array_push($this->data,$item);
			return true;
		}

		return false;

	}

	public function pop() {
		if(!$this->isEmpty()){
			array_pop($this->data);
			return true;
		}
		return false;
	}

	public function top(){

		// Return the last item 
		if($this->getSize()){

			return $this->data[$this->getSize()-1];
		}
		return false;
	}

	public function isEmpty(){

		return empty($this->data);
	}

	public function isFull(){
		if($this->getSize()==$this->size){
			return true;
		}
		return false;
	}

	public function getSize(){


		return count($this->data);
	}




}