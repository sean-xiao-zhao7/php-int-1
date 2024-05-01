<?php

namespace Xi\Php;

class DateTimeTest
{
    public function __construct()
    {
    }

    public static function test()
    {
        $period = new \DatePeriod(new \DateTime(), new \DateInterval("P1D"), new \DateTime("next month"));

        $result = '';
        foreach ($period as $day) {
            $result += $day->format('D M/d/Y') . PHP_EOL;
        }

        return $result;
    }
}
