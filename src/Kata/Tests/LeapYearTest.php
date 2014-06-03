<?php
namespace Kata\Tests;

use Kata\LeapYear;

class LeapYearTest extends \PHPUnit_Framework_TestCase
{

    private $year;
    private $leapYear;

    protected function setUp()
    {
        $this->year = 2096;
        //$this->leapYear = new LeapYear();
    }

    public function testisLeapYear(){
        $leapYear = new LeapYear();
        $this->assertTrue($leapYear->isLeapYear($this->year));
    }
}
