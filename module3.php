<?php
    function task3($R, $L) {
        $square = pow($R, 2); //calculating an area of the square
        $S_triangle = pow($L, 2) / 2; //calculating an area of one of triangles
        return $square - $S_triangle * 2; //return area of a figure
    }
?>
