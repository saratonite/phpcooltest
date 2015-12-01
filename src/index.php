<?php
require(__DIR__."/../vendor/autoload.php");

function title($title){
	echo "\n ******** $title ******* \n";
}

use Saratonite\phpcooltest\Hello;
use Saratonite\phpcooltest\String;
use Saratonite\phpcooltest\Http;
use Saratonite\phpcooltest\Mail;

title('Hello');
$m = new Hello();
echo $m->sayHello();

title('String Class');
$s = new String("Cool");
echo $s->value;

title('Http');

$http = new Http();

$headers = $http->getHeaders();
var_dump($headers);

title('Mail');

$mail = new Mail('****@****.com',"Hello","Meeage");

var_dump($mail->send());