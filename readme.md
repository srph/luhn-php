# php-luhn [![Build Status](https://travis-ci.org/srph/php-luhn.svg?branch=master)](https://travis-ci.org/srph/php-luhn?branch=master) [![Latest Stable Version](https://poser.pugx.org/srph/luhn/version.svg)](https://packagist.org/packages/sroh/luhn) [![MIT license](http://img.shields.io/badge/license-MIT-brightgreen.svg)](http://opensource.org/licenses/MIT)

An implementation of [Luhn algorithm (aka mod-10 algorithm)](http://en.wikipedia.org/wiki/Luhn_algorithm) to validate (verify the checksum of) credit card numbers in PHP.

\* *This was written to try out PHPUnit, but feel free to use it for anything as long as the MIT License permits*.

## Installation

To install this library, simply run `composer require` in your project's root directory:

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

First, clone the repository, and then install the development dependencies.

```bash
$ git clone https://github.com/srph/luhn.php.git && cd luhn.php
$ composer install
```

You're good to go.

### Automation

```bash
# ensure that you are in the root directory of the project
$ phpunit # run tests
```

## Acknowledgement

**php-luhn** © 2015+, Kier Borromeo (srph). Released under the [MIT License](https://mit-license.org).

> [srph.github.io](http://srph.github.io) &nbsp;&middot;&nbsp;
> GitHub [@srph](https://github.com/srph) &nbsp;&middot;&nbsp;
> Twitter [@_srph](https://twitter.com/_srph)
