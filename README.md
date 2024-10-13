# Install
composer require lamhotsimamora/random-string

# How to use

```
<?php 

require 'vendor/autoload.php';

$string = new \Lamhotsimamora\RandomString\RandomStringBuilder();

// set length of random string
$string->setLength(25);

echo $string->generate();
```
