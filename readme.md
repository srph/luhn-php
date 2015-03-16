# php-luhn [![Build Status](https://travis-ci.org/srph/luhn.php.svg?branch=master)](https://travis-ci.org/srph/luhn.php?branch=master) [![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)

An implementation of [Luhn algorithm (aka mod-10 algorithm)](http://en.wikipedia.org/wiki/Luhn_algorithm) to verify the checksum of credit card numbers in PHP.

\* *This was written to try out PHPUnit, but feel free to use it for anything as long as the MIT License permits*.

## Installation

To install this library, simply run `composer require`:

```bash
$ composer require srph/luhn
```

## Usage

This library is very easy to use! Our `function` **only** accepts one `string` argument and `return`s a `boolean`.

```php
<?php
/**
 * SRPH\Luhn\luhn(<string>);
 */
SRPH\Luhn\luhn('79927398712') => true
?>
```

For PHP `>=v5.6`, you can use the `use function` (aka `import function`) syntax:

```php
<?php
use function SRPH\Luhn\luhn;

echo luhn('79927398712') // => true
?>
``` 

## Contribution

Feel free to submit any inquiry, question, issue or pull-request!

### Building

\* *For contributors or for learning purposes only.*

**Requirements**:
- [PHP `>=v5.x`](https://php.net) (Ehh?)
- [Composer](https://getcomposer.org) (Install development dependencies)
- [Git](https://git-scm.org) (To clone the repository)

1-- **Clone the repository**

```bash
$ git clone https://github.com/srph/luhn.php.git && cd luhn.php
```

2-- **Install development dependencies**

```bash
# ensure that you are in the root directory of the project
$ composer install
```

You're good to go.

### Automation

```bash
# ensure that you are in the root directory of the project
$ phpunit # run tests
```

## Acknowledgement

**luhn.php** © 2015+, Kier Borromeo (srph). Released under the [MIT License](https://mit-license.org).

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)
