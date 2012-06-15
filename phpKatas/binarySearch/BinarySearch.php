<?php

class BinarySearch
{
    public function chop($needle, $haystack)
    {
        $haystackSize = count($haystack);

        if($haystackSize <= 0) {
            return -1;
        }

        if ($haystackSize == 1 && $haystack[0] == $needle) {
            return 0;
        }

        $from = 0;
        $to = $haystackSize -1;

        return $this->getPosition($needle, $haystack, $from, $to);
    }

    /**
     * @param $needle
     * @param $haystack
     * @param $from
     * @param $to
     * @return int
     */
    private function getPosition($needle, $haystack, $from, $to)
    {
        $median = $this->getMedian($to, $from);

        if ($haystack[$median] == $needle) {
            return $median;
        }

        if ($haystack[$median] > $needle) {
            $to = $median -1;
        }

        if ($haystack[$median] < $needle) {
            $from = $median + 1;
        }
        return $this->getPosition($needle, $haystack, $from, $to);
    }

    private function getMedian($to, $from)
    {
        if ($to + $from <= 0) {
            return 0;
        }
        return round(((($to + $from) - 1) / 2));
    }
}
