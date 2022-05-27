<?php
$x = $argv[1];
$y = $argv[2];
function distance($x1, $y1)
{

    $length = sqrt($x1 * $x1 + $y1 * $y1);
    echo "The Length of (" . $x1 . ", " . $y1 . ") and origin (0, 0) is: " . $length;
}
if (is_numeric($x) && is_numeric($y) && $x > 0 && $y > 0) {
    distance($x, $y);
} else {
    echo "Enter valid Input";
}
?>