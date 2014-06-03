<?php
namespace Kata;

/**
 * Class LeapYear
 * @package Kata
 */

class LeapYear
{
        public function isLeapYear($year){
            $leap = false;
            if (($year % 4) == 0)
                return true;

            if (($year % 100) == 0)
                $leap = false;
            if (($year % 400) == 0)
                $leap = true;
            else
                $leap = false;

            return $leap;
        }
}
