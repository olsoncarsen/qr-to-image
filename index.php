<?php
require __DIR__ . "/vendor/autoload.php";
$imagick = new Imagick();
$imagick->readImage('example.pdf[0]');
$imagick->writeImages('output.jpg', false);

$qrcode = new Zxing\QrReader('output.jpg');
$text = $qrcode->text();

echo $text;
