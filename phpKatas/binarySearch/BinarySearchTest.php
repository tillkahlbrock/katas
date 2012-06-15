<?php

require_once dirname(__FILE__). '/BinarySearch.php';

class BinarySearchTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldReturnMinusOneIfHaystackIsEmpty()
    {
        $haystack = array();
        $needle = 1;
        $search = new BinarySearch();
        $position = $search->chop($needle, $haystack);

        $this->assertEquals(-1, $position);
    }

    /**
     * @test
     */
    public function itShouldReturnThePostionOfANeedleThatsTheOnlyElementInAHaystack()
    {
        $haystack = array(1);
        $needle = 1;
        $search = new BinarySearch();
        $position = $search->chop($needle, $haystack);

        $this->assertEquals(0, $position);
    }

    /**
     * @test
     */
    public function itShouldReturnThePositionOfANeedleThatIsInTheLeftHalfOfTheHaystack()
    {
        $haystack = array(1,2,3);
        $needle = 1;
        $search = new BinarySearch();
        $position = $search->chop($needle, $haystack);

        $this->assertEquals(0, $position);
    }

    /**
     * @test
     */
    public function itShouldReturnThePositionOfANeedleThatIsInTheRightHalfOfTheHaystack()
    {
        $haystack = array(1,2,3);
        $needle = 3;
        $search = new BinarySearch();
        $position = $search->chop($needle, $haystack);

        $this->assertEquals(2, $position);
    }

    /**
     * @test
     */
    public function itShouldReturnThePositionOfANeedleThatIsInTheMiddleOfTheHaystack()
    {
        $haystack = array(1,2,3);
        $needle = 2;
        $search = new BinarySearch();
        $position = $search->chop($needle, $haystack);

        $this->assertEquals(1, $position);
    }
}
