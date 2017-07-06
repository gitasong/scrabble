<?php
    require_once 'src/Scrabble.php';

    class CalculateWordTest extends PHPUnit_Framework_TestCase
    {
        function testCalculateWordOneLetter()
        {
            // Arrange
            $test_scrabble = new Scrabble;
            $input = 'I';

            // Act
            $result = $test_scrabble->calculateWord($input);

            // Assert
            $this->assertEquals(1, $result);
        }
    }
?>
