# bee-cipher
The russian bees cipher

Installation
------------------

```shell script
composer require lantosbro/bee-cipher:0.0.1
```

Usage
------------------

```php
require_once __DIR__."/vendor/autoload.php";

$bee = new Bee;

echo $bee->to_bee("Some text"); //ЖЖЪжЖъжжЖъжЖЖъЖЖЪъЪЪЖжЖЪЖъЖЖЖжъЪЖжЖЪ

echo $bee->bee_to("ЖЖЪжЖъжжЖъжЖЖъЖЖЪъЪЪЖжЖЪЖъЖЖЖжъЪЖжЖЪ"); //Some text
```
