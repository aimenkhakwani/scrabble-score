<?php
    require_once 'src/Score.php';

    class ScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_addScore_return()
        {
            //Arrange
            $test_Score = new Score;
            $input = "a";

            //Act
            $result = $test_Score->addScore($input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_addScore_add()
        {
            //Arrange
            $test_Score = new Score;
            $input = "ab";

            //Act
            $result = $test_Score->addScore($input);

            //Assert
            $this->assertEquals(4, $result);
        }

        function test_addScore_caps()
        {
            //Arrange
            $test_Score = new Score;
            $input = "xb";

            //Act
            $result = $test_Score->addScore($input);

            //Assert
            $this->assertEquals(11, $result);
        }
    }

?>
