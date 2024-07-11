<?php

namespace JsonDB\base;

use JsonDB\base\Command;

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