<?php

class Tasks
{
    //1
    function counter(int $x)
    {
        $numbers = array();
        for ($i = 1; $i <= $x; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                array_push($numbers, 'C');
            } elseif ($i % 3 == 0) {
                array_push($numbers, 'A');
            } elseif ($i % 5 == 0) {
                array_push($numbers, 'B');
            } else {
                array_push($numbers, $i);
            }
        }
        print_r(json_encode($numbers));
    }

    //2
    function printTriangle(int $height)
    {
        $k = 2 * $height - 2;

        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $k / 2; $j++) {
                echo "_";
            }

            for ($j = 0; $j <= $i; $j++) {
                echo "#";
            }

            for ($j = 0; $j <= $i - 1; $j++) {
                echo "#";
            }

            for ($j = 0; $j < $k / 2; $j++) {
                echo "_";
            }

            $k = $k - 2;
            echo "<br>";
        }
    }

    //3
    function factorial(int $number): int
    {
        if ($number == 0) {
            return 1;
        } else {
            return $number * $this->factorial($number - 1);
        }
    }
}