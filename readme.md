# OKCoin

A PHP library for working w/ the OKCoin API.

The tools provided by OKCoin are not sufficient. There is no reliable stop or stoploss features, not are their sufficient market order features. This library allows me to write my own scripts to handle these needs in a more satisfactory way.

## Install

Normal install via Composer.

## Usage

Call the desired method and pass all parameters as a single array:

```php
use Travis\OKCoin;

$test = OKCoin::test(array(

));
```