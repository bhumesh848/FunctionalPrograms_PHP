<?php
// user input for Array size and Elements
$size = readline('Enter Size of Array: ');

if (is_numeric($size) && $size >= 3) {

	echo "Enter the Elements of Array: \n";
	
	for ($i = 0; $i < $size; $i++) {
		$num = readline("Enter " . $i + 1 . "th element of an array \n");
		if (is_numeric($num)) {
			$array[$i] = $num;
		} else {
			echo "Enter valid input";
            exit(0);
		}
	}
	/**
	 * Function to get sum of 3 integers adds to 0
	 * Running different loops for 3 Elements
	 * Returns the Distinct Triplets count
	 */
	function sumOf3IntAddsTo0($size, $array)
	{
		$count = 0;
		for ($i = 0; $i < $size; $i++) {
			for ($j = $i + 1; $j < $size; $j++) {
				for ($k = $j + 1; $k < $size; $k++) {
					if ($array[$i] + $array[$j] + $array[$k] == 0) {
						$count = $count + 1;
						echo "Distinct Triplets : " . $array[$i] . ", " . $array[$j] . " and " . $array[$k] . "\n";
					}
				}
			}
		}
		return $count;
	}
	echo "No.of Distinct Triplets: " . sumOf3IntAddsTo0($size, $array);
} else {
	echo "Invalid size input ";
}
?>