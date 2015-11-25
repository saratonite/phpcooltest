<?php

require(__DIR__."/../vendor/autoload.php");

use Saratonite\phpcooltest\Hello;
use Saratonite\phpcooltest\String;
use Saratonite\phpcooltest\Http;
$m = new Hello();
echo $m->sayHello();

$s = new String("Cool");
echo $s->value;

$http = new Http();

$headers = $http->getHeaders();
var_dump($headers);