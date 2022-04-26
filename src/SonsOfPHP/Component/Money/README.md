Sons of PHP - Money Component
======================================

Money Abstraction for projects working with money and currencies.

## Installation

```shell
composer require sonsofphp/money
```

## Usage

```php
use SonsOfPHP\Component\Money\Money;
use SonsOfPHP\Component\Money\CUrrency;

$money = new Money(100, new Currency('USD'));
```

## Reporting Issues

Please report issues in the mother repository, [sonsofphp/sonsofphp][mother].

## Getting Help

You can get help by using the [Discussions][discussions] link on our
[site][homepage].

## Contributing

Just fork [SonsOfPHP/SonsOfPHP][mother] and create a PR with the updates you
want.

[mother]: <https://github.com/SonsOfPHP/sonsofphp> "Sons of PHP Mother Repository"
[discussions]: https://github.com/orgs/SonsOfPHP/discussions
[homepage]: https://github.com/SonsOfPHP