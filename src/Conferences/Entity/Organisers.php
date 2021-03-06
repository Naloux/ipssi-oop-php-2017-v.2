<?php

declare(strict_types=1);

namespace Conferences\Entity;

final class Organisers 
{
    private $meeting_id;

    private $user_id;

    public function __construct(int $meeting_id, string $user_id)
    {
        $this->meeting_id = $meeting_id;
        $this->user_id = $user_id;
    }

    public function getMeetingId() : string
    {
        return $this->meeting_id;
    }
    public function getUserName() : string
    {
        return $this->user_id;
    }
}
