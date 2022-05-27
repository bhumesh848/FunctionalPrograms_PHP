<?php
// Taking rows and columns from user and calling twoDimArray by passing rows and columns.
// 
// Creating a Array method it takes array values from user and prints it.
function createTwoDArrayInteger($row, $col){
    $array =array();
    for ($i=0; $i < $row; $i++){
        for ($j=0; $j < $col; $j++){
            $input = readline("Enter the value of $i$j elements ");
            if(is_numeric($input)){
            $array[$i][$j] = $input;
            }
            else{
                echo "Enter valid Input";
                exit(0);
            }
        }
    }
    return $array;
}
//function for array of double
function createArrayDouble($row, $col){
    $arrayDouble = array();
    for ($i=0; $i < $row; $i++){
        for ($j=0; $j < $col; $j++){
            $input = readline("Enter Double value for $i$j elements \n");
            if((is_numeric($input))&& preg_match('/^[0-9]+(\.[0-9]{1,2})?/',$input)){
                $arrayDouble[$i][$j] =  $input;
            }
            else{
                echo "enter double value";
                exit(0);
            }
           
        }      
        }
        return $arrayDouble;
    }
    

// function for array of boolean 
function createArrayBoolean($row, $col){
    $arrayBoolean = array();
    for ($i=0; $i < $row; $i++){
        for ($j=0; $j < $col; $j++){
            $input = readline("Enter Boolean Value for $i$j elements \n");
            
            if(is_bool($input)== TRUE){
                $arrayBoolean[$i][$j] = $input;
            }
           else
           {
               echo "enter Boolean value";
               exit(0);
           }
    
        }
    }
    return $arrayBoolean;
}
// function to display array
function displayArray($array,$row,$col){
    for ($i=0; $i < $row; $i++){
        for($j=0; $j < $col; $j++){
            echo $array[$i][$j] ." ";
        }
        echo "\n";
    }
}
$row = readline("Enter row elements \n");
$col = readline("Enter col elements");

// calling function
$TwoDArray = createTwoDArrayInteger($row, $col);
echo "\n";
$doubleArray = createArrayDouble($row, $col);
echo "\n";
$booleanArray = createArrayBoolean($row, $col);
displayArray($TwoDArray,$row,$col);
echo "\n";
displayArray($doubleArray,$row,$col);
echo "\n";
displayArray($booleanArray,$row,$col);

?>