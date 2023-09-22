<?php
    function task1($N, $M, $V, $L) {
        $volume = pow($N, 3); //receive cube volume
        $tubeSection = pow($M / 100, 2); //receive section of water supply tubes
        $V = $V * 0.6; //convert from cm/min to m/h
        $flow = 2 * ($tubeSection * $V) + $L; //total filling speed
        $time = ($volume / $flow) * 3600; //receive fill time at hours & convert to seconds
        return $time;
    }
?>