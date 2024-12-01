<?php

use JsonDB\base\Analyzers\ConditionsAnalyzer;

class DataBase 
{
    
    private ConditionsAnalyzer $analyzer;

    public function __construct()
    {
        
    }

    public function __invoke()
    {
        echo "hello";
    }

}