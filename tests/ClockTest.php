<?php
    require_once 'src/Clock.php';

    class ClockTest extends PHPUnit_Framework_TestCase
    {
        function test_Angle()
        {
            //arrange
            $time_angle = new Clock;
            $hr_input = 3;
            $mn_input = 05;

            //act
            $result = $time_angle->clockAngle($hr_input, $mn_input);

            //assert
            $this->assertEquals(60, $result);
        }

        function test_outPut()
        {
            //arrange
            $time_angle = new Clock;
            $hr_input = 1;
            $mn_input = 45;

            //act
            $result = $time_angle->clockAngle($hr_input, $mn_input);

            //assert
            $this->assertEquals(120, $result);
        }

    }

?>
