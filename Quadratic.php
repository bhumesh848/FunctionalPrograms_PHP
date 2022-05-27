<?php
// user input of a, b, c for Quadratic equation
// Function to get delta 
function getDelta($a, $b, $c)
{
    $delta = 0;

    $delta = ($b * $b) - (4 * $a * $c);
    return abs($delta);
}
/**
 * Function for calculating root1
 * Passing parameters of a, b, c and delta
 * Returns the root1
 */
function root1($a, $b, $c)
{
    $delta = getDelta($a, $b, $c);
    $root1 = (-$b + sqrt($delta)) / (2 * $a);
    return $root1;
}

/**
 * Function for calculating root2
 * Passing parameters of a, b, c and delta 
 * Returns the root2
 */
function root2($a, $b, $c)
{
    $delta = getDelta($a, $b, $c);
    $root2 = (-$b - sqrt($delta)) / (2 * $a);
    return $root2;
}

$a = readline('Enter Value of a: ');
$b = readline('Enter Value of b: ');
$c = readline('Enter Value of c: ');
// Printing roots of Quadratic Equation
echo "delta =" . getDelta($a, $b, $c);
echo "Root 1: " . root1($a, $b, $c,);
echo "\nRoot 2: " . root2($a, $b, $c,);
