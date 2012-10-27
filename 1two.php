<?php
//Populates the $english array for numbers 16-19.
$english = array(
    0 => 'zero',
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen'
);

//Prefix for numbers 20-99.
$prefix = array(
    2 => 'twenty',
    3 => 'thirty',
    4 => 'forty',
    5 => 'fifty',
    6 => 'sixty',
    7 => 'seventy',
    8 => 'eighty',
    9 => 'ninety',
);

//Populates the $english array for numbers 16-19.
for ($i = 16; $i <= 19; $i++) {
    $b = substr($i, -1, 1);
    $english[$i] = $english[$b] . "teen";
}

//Populates the $english array for numbers 20-99.
for ($i = 20; $i <= 99; $i++) {
    $a = substr($i, -2, 1);
    $b = substr($i, -1, 1);
    if (!$b == 0) {
        $english[$i] = $prefix[$a] . '-' . $english[$b];
    } else {
        $english[$i] = $prefix[$a];
    }
}

//Usage
echo 'Easy as ' . $english[1] . ' ' . $english[2] . ' ' . $english[3] . '.';

?>