<?php

$fullString = "0@sn9sirppa@#?ia'jgtvryko1";

$keyNumber = strlen($fullString) / 2;

$substringA = substr($fullString, 5, $keyNumber);

$keyString = str_replace('@#?' , ' ', $substringA); 

$invertString = strrev($keyString);

echo $invertString . "\r\n";
