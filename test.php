
<?php

$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);


echo "The age of the student is: " . $student['age'];
?>
Task2:
<?php

$student = array(
    'name' => 'Alice',
    'age' => 22,
    'grade' => 'A'
);


if (array_key_exists('grade', $student)) {
    echo "The 'grade' key exists in the array.";
} else {
    echo "The 'grade' key does not exist in the array.";
}
?>
Task3:
<?php

$numbers = array(100, 200, 50, 40, 50);


foreach ($numbers as $value) {
    echo $value . "\n";
}
?>
Task 4:
<?php
$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

$filteredNames = array_filter($names, function ($name) {
    return strtoupper(substr($name, 0, 1)) === 'M';
});


foreach ($filteredNames as $name) {
    echo $name . "\n";
}

?>
Task5:
<?php
$originalString = 'Hello, World!';

$reversedString = strrev($originalString);

echo $reversedString;
?>
