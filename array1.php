<?php

$names = array('Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni');

$filteredNames = array_filter($names, function ($name) {
    return strtoupper(substr($name, 0, 1)) === 'M';
});


foreach ($filteredNames as $name) {
    echo $name . "\n";
}


// Create a string variable $originalString with the value 'Hello, World!'.

// Use the strrev() function to reverse the string.

// Print the reversed string.
// $originalString='Hello, World!';

// echo strrev($originalString);
$originalString = 'Hello, World!';

$reversedString = strrev($originalString);

echo $reversedString;

?>

