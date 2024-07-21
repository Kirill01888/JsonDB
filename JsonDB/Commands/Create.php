<?php

namespace JsonDB\base\ConcreteCommand;

use JsonDB\base\Command\Command;

require_once 'Command/Command.php';

class Create implements Command
{
    private array $arguments;
    private array $conditions;
    private array $columns;

    public function __construct(array $arguments, array $conditions, array $columns)
    {
        $this->arguments = $arguments;
        $this->conditions = $conditions;
        $this->columns = $columns;
    }

    public function execute()
    {

    }

}

?>