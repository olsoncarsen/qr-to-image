# qr-to-image
Its a PHP CLI  tool for Mac/Linux (tested and developed in MacOS)

## Installation

1. We need to install pdfimages cli:

	```sh
	$ brew install poppler

	```

2. Install composer dependencies:

	```sh
	$ composer install 

	```

## How to use 

	```sh
	$ php index.php example.pdf

	```

After that will be generated qrcode-***.ppm images with recognized qr codes.
