<?php

namespace JsonDB\dev;

use JsonDB\base\BaseFileWriter;

require_once 'BaseFileWork\BaseFileWriter.php';

class FileWriter implements BaseFileWriter
{

    private string $arguments;

    public function __construct(string $arguments)
    {
        $this->arguments = $arguments;
    }

    public function write($fileName)
    {
        $file = fopen($fileName, 'w');

        $jsonData = json_encode($this->arguments);

        fwrite($file, $jsonData);
    }
}

?>