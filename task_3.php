<?php
$grades = array(85, 92, 78, 88, 95); 

function Rahim($grades) {
    rsort($grades); 
    return $grades;
}


$sortedGrades = Rahim($grades);


print_r($sortedGrades);
?>
