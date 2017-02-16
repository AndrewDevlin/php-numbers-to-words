<?php
    require_once 'src/NumbersToWords.php';

    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_translateNumbersToWords_underTwenty()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 1;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("one", $results);
        }

        function test_translateNumbersToWords_underHundredTens()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 80;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("eighty ", $results);
        }
    }
 ?>
