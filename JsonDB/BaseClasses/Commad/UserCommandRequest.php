<?php

namespace JsonDB\base;

class UserCommandRequest
{
    private string $commandRequest;

    function __construct($commandFromUser)
    {
        $this->commandRequest = $commandFromUser;
    }

    public function getCommand() : string
    {
        return $this->commandRequest;
    }
}

?>