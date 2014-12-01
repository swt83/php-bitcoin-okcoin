# OKCoin

A PHP library for working w/ the OKCoin API.

## Install

Normal install via Composer.

## Usage

Call the desired method and pass all parameters as a single array:

```php
use Travis\OKCoin;

$ticker = OKCoin::future_ticker(array(
	'symbol' => 'btc_usd',
	'contract_type' => 'this_week',
));
```

See the [documentation](https://www.okcoin.com/about/rest_api.do) for a list of available methods.