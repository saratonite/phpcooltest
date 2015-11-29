<?php

class MailTest extends PHPUnit_Framework_TestCase{


	private $mail;

	public function setUp(){

		$this->mail = new Saratonite\phpcooltest\Mail("sdasda@asadasddd.dsd","sdasaddas","dasdasd");

	}

	public function testSendmail(){

		$this->assertTrue($this->mail->send());
	}


}