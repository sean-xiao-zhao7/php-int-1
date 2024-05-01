<?php

namespace Xi\Php;

class DateTimeTest
{
    public static function exec_test()
    {
        $period = new \DatePeriod(new \DateTime(), new \DateInterval("P1D"), new \DateTime("next month"));

        $result = PHP_EOL;
        foreach ($period as $day) {
            $result .= $day->format('D M/d/Y') . PHP_EOL;
        }

        return $result;
    }
}
