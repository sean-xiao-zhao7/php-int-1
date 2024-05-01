<?php

namespace Xi\Php;

use Xi\Php\Interfaces\ExecTestInterface;

class DateTimeExecTest implements ExecTestInterface
{
    public static function exec_test(): string
    {
        $period = new \DatePeriod(new \DateTime(), new \DateInterval("P1D"), new \DateTime("next month"));

        $result = PHP_EOL;
        foreach ($period as $day) {
            $result .= $day->format('D M/d/Y') . PHP_EOL;
        }

        return $result;
    }
}
