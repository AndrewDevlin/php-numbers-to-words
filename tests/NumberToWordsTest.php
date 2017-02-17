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

        function test_translateNumbersToWords_underTwentyThousands()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 12000;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("twelve thousand ", $results);
        }

        function test_translateNumbersToWords_underTwentyThousandsRemainder()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 12342;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("twelve thousand three hundred forty two", $results);
        }

        function test_translateNumbersToWords_underHundredThousand()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 20000;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("twenty thousand ", $results);
        }

        function test_translateNumbersToWords_underHundredThousandRemainder()
        {
            //Arrange
            $numberToChange = new NumbersToWords;
            $input = 53287;

            //Act
            $results = $numberToChange->translateNumbersToWords($input);

            //Assert
            $this->assertEquals("fifty three thousand two hundred eighty seven", $results);
        }
    }
 ?>
