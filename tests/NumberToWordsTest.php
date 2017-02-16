<?php
    require_once 'src/NumbersToWords.php';

    class NumbersToWordsTest extends PHPUnit_Framework_TestCase
    {
        function test_translateNumbersToWords_singleDigit()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 1;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("one", $results);
        }
    }
 ?>
