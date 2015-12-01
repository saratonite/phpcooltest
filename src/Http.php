<?php

namespace Saratonite\phpcooltest;
class Http{


	private $headers = [];



	public function getHeaders(){

		//getallheaders
		//apache_request_headers
		//http_get_request_headers
		//
		 if(function_exists('getallheaders(oid)')){
			$this->headers = getallheaders();
		 }
		 return false;
	}
}