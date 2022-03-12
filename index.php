<?php
require __DIR__ . "/vendor/autoload.php";

// extarct images from argv[1] pdf file with pdfimages cli
$output = null;
$retval = null;
exec('pdfimages -j '.$argv[1].' qrcode', $output, $retval);
echo "Returned with status $retval and output:\n";
print_r($output);

// getting all files from current directory
$output = null;
$retval = null;
exec('ls', $output, $retval);

// looping through images from pdfimages
foreach ($output as $imageFileName) {
  if (substr($imageFileName, 0, 6) === 'qrcode') {
    var_dump($imageFileName);
    $qrcode = new Zxing\QrReader($imageFileName);
    $text = $qrcode->text();
    if ($text) {
      // if we find qr code, then leave the image
      continue;
    } else {
      // remove unrecognized image
      exec('rm '.$imageFileName);
    }
  }
}

