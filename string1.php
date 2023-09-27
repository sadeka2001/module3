<?php 


// $first="sadeka";

// echo "Hello {$first}";
$first="sadeka";

$second="akther";
//heredoc hocche <<< EOT    long text ke alada kore
$text= <<<EOT
Hello {$first}
Hello {$second}
EOT;
echo $text;
echo "\n";


for($i=0; $i<strlen($first); $i++){

    echo $first[$i]."\n";
}
$class="eleven";
$sub=substr($class, -2)."\n";
echo $sub;
$sub=substr($class, -5);
echo $sub;

