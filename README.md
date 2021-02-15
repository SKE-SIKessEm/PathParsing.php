# Path Parsing
A PHP Path Parsing library


## Installation

Use Composer to install the library with this command :

`composer require sikessem/parsing-path`


## Usage

Example : `test.php`

```php
<?php
use Ske\Parsing\Path\{PathParsable};

require_once __DIR__ . "/autoload.php";

$path = (new PathParsable("/usr/bin/sikessem.tar.gz"))->parse();
echo $path->basename; // Show "sikessem.tar.gz"
