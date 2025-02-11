<?php declare(strict_types=1);

namespace danog\MadelineProto\EventHandler\Message\Entities;

/**
 * Message entity representing a [user mention](https://core.telegram.org/api/mentions) created by the user, not returned by the API.
 */
final class InputMentionName extends MessageEntity
{
    /**  @var int|string Identifier of the user that was mentioned */
    public readonly int|string $userId;

    /** @internal  */
    protected function __construct(array $rawEntities)
    {
        parent::__construct($rawEntities);
        $this->userId = $rawEntities['user_id'];
    }
}
