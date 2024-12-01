<?php

namespace JsonDB\base\Extractor;

use JsonDB\base\Command\UserCommandRequest;

require_once 'extractor.php';

class UserRequestParcer
{
    private UserCommandRequest $userCommand;

    private array $parced;

    function __construct(UserCommandRequest $userCommand)
    {
        $this->userCommand = $userCommand;
    }

    public function parce(Extractor $extractor)
    {
        $this->parced = $extractor->extract($this->userCommand->getCommand());
    }

    public function getParced()
    {
        return $this->parced;
    }
}

?>