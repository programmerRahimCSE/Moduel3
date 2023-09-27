<?php
$numbers = range(1, 10); 

function removeEvenNumbers($array) {
    $result = array();
    foreach ($array as $number) {
        if ($number % 2 !== 0) { 
            $result[] = $number; 
        }
    }
    return $result;
}

$Rahim = removeEvenNumbers($numbers);

print_r($Rahim);
?>
