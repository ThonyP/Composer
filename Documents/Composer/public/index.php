<?php

require ('../vendor/autoload.php');

$message = new App\Wcs\Hello();

echo $message->talk();


/////////////////////////////////////


$mess2 = new HelloWorld\SayHello();

echo $mess2->world();
