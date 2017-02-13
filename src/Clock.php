<?php
    class Clock
    {
        function clockAngle($hr, $mn)
        {
            $hour_angle = $hr * 30;
            $minute_angle = $mn * 6;
            $angle = abs($hour_angle - $minute_angle);
            if ($angle > 180)
            {
                return 360 - $angle;
            } else {
                return $angle;
            }
        }
    }

?>
