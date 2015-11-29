<?php

class DateTimeTest extends PHPUnit_Framework_TestCase {

	private $start;

	const TIMEZONE = "UTC";

	public function setUp(){
		$this->start = new DateTime();

	}

	public function testDateTimeInstance(){
		//var_dump($this->start);
		//echo $this->start->timezone;
		$this->assertInstanceOf('DateTime',$this->start);
	}

	public function testSettimezone(){
		$this->start->setTimezone(new DateTimeZone(self::TIMEZONE));
	}
}