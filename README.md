# bee-cipher
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/9ed30fbe2e6644cb866cdbf3f2929baa)](https://www.codacy.com/manual/LantosBro/bee-cipher?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=LantosBro/bee-cipher&amp;utm_campaign=Badge_Grade)

The russian bees cipher PHP Library

Try it here: [BONK](https://xn--f1aa3db.xn--p1ai/)

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
