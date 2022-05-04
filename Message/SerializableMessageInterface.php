<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\EventSourcing\Message;

/**
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
interface SerializableMessageInterface extends MessageInterface
{
    /**
     * Serialize the message and return the serialized data that needs to be
     * stored
     *
     * @return array
     */
    public function serialize(): array;

    /**
     * Rebuild the Message from the serialized data
     *
     * @param array $data
     *
     * @return static
     */
    public static function deserialize(array $data): SerializableMessageInterface;
}
