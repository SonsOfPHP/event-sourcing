<?php

declare(strict_types=1);

namespace SonsOfPHP\Bridge\Symfony\EventSourcing;

use SonsOfPHP\Bridge\Symfony\EventSourcing\Aggregate\AggregateId as BaseAggregateId;
use Symfony\Component\Uid\Uuid;

/**
 * @deprecated Use \SonsOfPHP\Bridge\Symfony\EventSourcing\Aggregate\AggregateId instead
 */
final class AggregateId extends BaseAggregateId
{
}