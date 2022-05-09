<?php

declare(strict_types=1);

namespace SonsOfPHP\Component\EventSourcing\Bridge\Symfony\MessageEnricherHandler;

use SonsOfPHP\Component\EventSourcing\Message\MessageInterface;
use SonsOfPHP\Component\EventSourcing\Message\Enricher\Handler\MessageEnricherHandlerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Blamable Enricher
 *
 * Adds User information to the event message's metadata
 *
 * @author Joshua Estes <joshua@sonsofphp.com>
 */
class BlameableEnricher implements MessageEnricherHandlerInterface
{
    public const METADATA_BLAMEABLE = '__user';

    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    /**
     * {@inheritdoc}
     */
    public function enrich(MessageInterface $message): MessageInterface
    {
        $user = $this->security->getUser();

        if ($user instanceof UserInterface) {
            return $message->withMetadata([
                self::METADATA_BLAMEABLE => [
                    'identifier' => $user->getUsername(),
                ]
            ]);
        }

        return $message;
    }
}
