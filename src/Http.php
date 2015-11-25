<?php

namespace Saratonite\phpcooltest;
class Http{



	public function getHeaders(){

		//getallheaders
		//apache_request_headers
		//http_get_request_headers
		return getallheaders();
	}
}