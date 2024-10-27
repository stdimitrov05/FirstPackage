<?php
require __DIR__ . '/../vendor/autoload.php';

use Stdimitrov\FirstPackage\Greeter;

$greeter = new Greeter();
echo $greeter->sayHello();