<?php

echo "What is your name?\n";
$user_name = trim(fgets(STDIN));


$greeting = "Hello, $user_name! Nice to meet you.";

// Print the greeting
echo $greeting . "\n";
?>
