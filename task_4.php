<?php
$studentGrades = array(
    array("Math" => 85, "English" => 92, "Science" => 78),
    array("Math" => 88, "English" => 95, "Science" => 90),
    array("Math" => 75, "English" => 80, "Science" => 86)
);

function Rahim($grades) {
    $averageGrades = array();
    
    foreach ($grades as $student) {
        $total = array_sum($student);
        $count = count($student);
        $average = $total / $count;
        $averageGrades[] = $average;
    }
    
    return $averageGrades;
}

$averages = Rahim($studentGrades);

foreach ($averages as $key => $average) {
    echo "<br> Average grade for Student  " . ($key + 1) . ": " . $average . PHP_EOL;
}
?>
