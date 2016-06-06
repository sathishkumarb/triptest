<?php
/**
 * Class JourneyTest
 *
 * @author    Sathish
 * @link      https://github.com/sathishkumarb/UnorderedTripBoardingPassSorter
 * @copyright null
 */



class JourneyTest extends PHPUnit_Framework_TestCase
{

    public function testValidJsonIsObject()
    {
        $this->assertContainsOnlyInstancesOf('Journey', Journey::load(__DIR__ . '/../data/journey.json'));
    }

    public function testFileNotFoundRaiseException()
    {
        $this->setExpectedException('InvalidArgumentException');
        Journey::load('data/badfilename.json');}

    public function testInvalidJsonRaiseException()
    {
        $this->setExpectedException('InvalidArgumentException');
        Journey::load('data/dummy.file');
        
    }
 } 
    