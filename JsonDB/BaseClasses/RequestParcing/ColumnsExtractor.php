<?php

namespace JsonDB\base\Extractor;

use JsonDb\base\Exeptions\ExtractionError;
use JsonDB\base\Extractor\Extractor;

require_once 'Extractor.php';
require_once '../Exeptions/ExtractionError.php';

define('COUNT_OF_PARENTHESIS', 2);

class ColumnsExtractor implements Extractor
{
    public function extract(string $toParce)
    {
        if($this->haveErrors($toParce)) throw new ExtractionError();

        return $this->getColumns($toParce);
    }

    private function haveErrors(string $toParce) : bool
    {
        if(!$this->haveBounds($toParce)) return true;

        if($this->countBounds($toParce) > 2 || $this->countBounds($toParce) < 2) return true;

        return false;
    }

    private function haveBounds(string $toParce) : bool
    {
        $leftBound = strpos($toParce, '(');
        $rightBound = strpos($toParce, ')');

        return $leftBound && $rightBound;
    }

    private function countBounds(string $toParce) : int
    {
        $countLeft = substr_count($toParce, '(');
        $countRight = substr_count($toParce, ')');

        return $countLeft + $countRight;
    }

    private function getColumns(string $toParce) : array
    {
        $copied = $this->copyColumnsPart($toParce);

        return explode(',', $copied);
    }

    private function copyColumnsPart(string $toParce) : string
    {
        $columnsString = '';

        $beginColumns = strpos($toParce, '(');
        $endColumns = strpos($toParce, ')');

        $columnsString = mb_substr($toParce, $beginColumns, ($endColumns - $beginColumns) + 1);

        return $columnsString;
    }
}

?>