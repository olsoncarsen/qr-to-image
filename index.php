<?php
require __DIR__ . "/vendor/autoload.php";

// $imagick = new Imagick();
// $imagick->readImage('example.pdf[0]');
// $imagick->writeImages('output.jpg', false);

// $output = null;
// $retval = null;
// exec('pdfimages -j example.pdf iamge', $output, $retval)
// echo "Returned with status $retval and output:\n";
// print_r($output);

$qrcode = new Zxing\QrReader('image-003.ppm');
$text = $qrcode->text();

echo $text;
