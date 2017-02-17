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

        function test_translateNumbersToWords_underHundredTensRemainder()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 88;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("eighty eight", $results);
        }

        function test_translateNumbersToWords_underThousands()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 400;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("four hundred ", $results);
        }

        function test_translateNumbersToWords_underThousandsRemainder()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 432;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("four hundred thirty two", $results);
        }
    }
 ?>
