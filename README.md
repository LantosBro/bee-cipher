# bee-cipher
[![Build Status](https://travis-ci.com/LantosBro/bee-cipher.svg?branch=master)](https://travis-ci.com/LantosBro/bee-cipher)

The russian bees cipher

Installation
------------------

```shell script
composer require lantosbro/bee-cipher:dev-master
```

Usage
------------------

```php
require_once __DIR__."/vendor/autoload.php";

$bee = new Bee;

echo $bee->to_bee("Some text"); //ЖЖЪжЖъжжЖъжЖЖъЖЖЪъЪЪЖжЖЪЖъЖЖЖжъЪЖжЖЪ

echo $bee->bee_to("ЖЖЪжЖъжжЖъжЖЖъЖЖЪъЪЪЖжЖЪЖъЖЖЖжъЪЖжЖЪ"); //Some text
```
