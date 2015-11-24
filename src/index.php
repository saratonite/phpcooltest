<?php

require(__DIR__."/../vendor/autoload.php");

use Saratonite\phpcooltest\Hello;
$m = new Hello();
echo $m->sayHello();