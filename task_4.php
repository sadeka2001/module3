<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Student $student Average Grade: $average\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 80, 'English' => 90, 'Science' => 70),
    'Student2' => array('Math' => 85, 'English' => 87, 'Science' => 95),
    'Student3' => array('Math' => 85, 'English' => 75, 'Science' => 83),
);


calculateAverageGrades($studentGrades);
