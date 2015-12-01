<?php
 namespace Saratonite\phpcooltest;
 class Mail {


 	private $to;

 	private $subject;

 	private $message;

 	public $from ="";

 	const MAIL_CRLF ="\r\n";

 	public $headers = "From: webmaster@example.com \r\n";

    public function __construct($to,$subject,$message){

    	$this->to = $to;
    	$this->subject = $subject;
    	$this->message;



    }

 	public function send(){

 		return $this->_sendmail();
 	}


 	private function _sendmail(){
 		//mail ( string $to , string $subject , string $message [, string $additional_headers [, string $additional_parameters ]] );
 		
 		return mail($this->to,$this->subject,$this->message,$this->headers);

 	}

 	private function isValidEmail($email){

 		return filter_var($email,FILTER_VALIDATE_EMAIL);
 	}

 }