<?php
    class NumbersToWords
    {
        function translateNumbersToWords($user_number)
        {
            $result_output = "";
            $working_number = $user_number;

            $underTwentyDigits = array(
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

            $tensDigits = array(
                2 => "twenty", 3 => "thirty",
                4 => "forty", 5 => "fifty",
                6 => "sixty", 7 => "seventy",
                8 => "eighty", 9 => "ninety");

            if ($working_number < 100000 && $working_number > 999) {
                if ($working_number > 19000) {
                    foreach ($tensDigits as $number => $written_number) {
                        if (floor($working_number / 10000) == $number) {
                            $result_output .= "$written_number ";
                            $working_number -= $number * 10000;
                        }
                    }
                }

                if ($working_number > 999) {
                    foreach ($underTwentyDigits as $number => $written_number) {
                        if (floor($working_number / 1000) == $number) {
                            $result_output .= "$written_number ";
                            $working_number -= $number * 1000;
                        }
                    }
                }
                $result_output .= "thousand ";
            }


            if ($working_number < 1000 && $working_number > 99) {
                foreach ($underTwentyDigits as $number => $written_number) {
                    if (floor($working_number / 100) == $number) {
                        $result_output .= "$written_number hundred ";
                        $working_number -= $number * 100;
                    }
                }
            }

            if ($working_number < 100 && $working_number > 19) {
                foreach ($tensDigits as $number => $written_number) {
                    if (floor($working_number / 10) == $number) {
                        $result_output .= "$written_number ";
                        $working_number -= $number * 10;
                    }
                }
            }

            if ($working_number < 20) {
                foreach ($underTwentyDigits as $number => $written_number) {
                    if ($working_number == $number) {
                        $result_output .= $written_number;
                    }
                }
            }

            return $result_output;
        }
    }

?>
