<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\EventSourcing\Message;

/**
 * The Event Message Payload is stored in here
 *
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
final class MessagePayload implements \IteratorAggregate, \Countable
{
    public function __construct(
        private array $payload = [],
    ) {
    }

    /**
     */
    #[\ReturnTypeWillChange]
    public function getIterator()
    {
        return new \ArrayIterator($this->payload);
    }

    /**
     */
    public function count(): int
    {
        return count($this->payload);
    }

    /**
     */
    public function with(string $key, $value)
    {
        $that = clone $this;
        $that->payload[$key] = $value;

        return $that;
    }

    /**
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->payload);
    }

    /**
     */
    public function get(string $key)
    {
        if ($this->has($key)) {
            return $this->payload[$key];
        }
    }
}
