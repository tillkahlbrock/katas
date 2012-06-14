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
}
