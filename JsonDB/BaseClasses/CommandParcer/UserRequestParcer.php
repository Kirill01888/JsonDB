<?php

namespace JsonDB\base;

use JsonDB\base\Extractor;

require_once 'extractor.php';

class UserRequestParcer
{
    private UserCommandRequest $userCommand;

    private array $result;

    function __construct(UserCommandRequest $userCommand)
    {
        $this->userCommand = $userCommand;
    }

    public function parce(Extractor $extractor)
    {
        $this->result = $extractor->extract($this->userCommand->getCommand());
    }

    public function getParced()
    {
        return $this->result;
    }
}

?>