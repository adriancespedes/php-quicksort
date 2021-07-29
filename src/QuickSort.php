<?php

namespace Quicksort;

class QuickSort
{
    public static function sort(array $numbers)
    {
        if (count($numbers) <= 1) {
            return $numbers;
        }

        $firstElement = reset($numbers);
        $smaller = [];
        $bigger = [];

        for ($i = 1; $i < count($numbers); $i++) {
            if (!is_numeric($numbers[$i])) {
                throwException('All array elements must be numbers');
            }

            //check if each element of array is bigger or smaller than first one and place it in the arrays
            if ($numbers[$i] < $firstElement) {
                $smaller[] = $numbers[$i];
            } else {
                $bigger[] = $numbers[$i];
            }
        }

        //we call it recursively for order the smaller and bigger arrays
        return array_merge(QuickSort::sort($smaller), array($firstElement), QuickSort::sort($bigger));
    }
}