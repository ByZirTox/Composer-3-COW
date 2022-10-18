<?php 
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Wilder! Sorry, I pooo ');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;