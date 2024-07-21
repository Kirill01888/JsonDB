<?php

namespace JsonDB\base\ConcreteCommand;

use JsonDB\base\Command\Command;

require_once 'Command/Command.php';

class Insert implements Command
{
    private string $userCommand;

    public function __construct(string $userCommand)
    {
        $this->userCommand = $userCommand;   
    }

    public function execute()
    {

    }
}

?>