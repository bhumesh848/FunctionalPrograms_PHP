<?php
// Taking Double command line argument
$t = $argv[1];
$v = $argv[2];
// Validating double command line argument 
if(is_numeric($t)&& is_numeric($v) && (preg_match('/^[0-9]+(\.[0-9]{1,2})?$/', "100"))){
  windChill($t,$v);
}
else{
    echo "enter valid input";
    exit(0); 
}
// calculating wind chill with given formula
function windChill($t, $v)
{
    if ($t < 50 && $v > 3 && $v < 120) {
        $w = 35.74 + (0.6215 * $t) + (((0.4275 * $t) - 35.75) * (pow($v, 0.16)));
        echo "wind chill =" .round($w,2);
        
    } else {
        echo "Cannot be determined as you entered invalid input";
    }
}
//windChill($t, $v);
?>
