<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\Money\Operator\Amount;

use SonsOfPHP\Component\Money\Exception\MoneyException;
use SonsOfPHP\Component\Money\AmountInterface;
use SonsOfPHP\Component\Money\Amount;

/**
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
class DivideAmountOperator implements AmountOperatorInterface
{
    private $divisor;

    public function __construct($divisor)
    {
        $this->divisor = $divisor;
    }

    /**
     * {@inheritdoc}
     */
    public function apply(AmountInterface $amount): AmountInterface
    {
        return new Amount($amount->getAmount() / $this->divisor);
    }
}
