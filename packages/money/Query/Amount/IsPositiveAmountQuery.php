<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\Money\Query\Amount;

use SonsOfPHP\Component\Money\AmountInterface;
use SonsOfPHP\Component\Money\Exception\MoneyException;

/**
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
class IsPositiveAmountQuery implements AmountQueryInterface
{
    /**
     * {@inheritdoc}
     */
    public function queryFrom(AmountInterface $amount)
    {
        return $amount->getAmount() > 0;
    }
}
