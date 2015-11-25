<?php

require(__DIR__."/../vendor/autoload.php");

use Saratonite\phpcooltest\Hello;
use Saratonite\phpcooltest\String;
$m = new Hello();
echo $m->sayHello();

$s = new String("Cool");
echo $s->value;