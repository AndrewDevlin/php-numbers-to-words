<?php
    class NumbersToWords
    {
        function translateNumbersToWords($user_number)
        {
            $result_output = "";

            $singleDigits = array(
                1 => "one", 2 => "two",
                3 => "three", 4 => "four",
                5 => "five", 6 => "six",
                7 => "seven", 8 => "eight",
                9 => "nine", 10 => "ten",
                11 => "eleven", 12 => "twelve",
                13 => "thirteen", 14 => "fourteen",
                15 => "fifteen", 16 => "sixteen",
                17 => "seventeen", 18 => "eighteen",
                19 => "nineteen");

            if ($user_number < 20) {
                foreach ($singleDigits as $number => $written_number) {
                    if ($user_number == $number) {
                        $result_output .= $written_number;
                    }
                }
            }

            return $result_output;
        }
    }

?>
