<?php
//Populates the $english array for numbers 16-19.
$e = array(
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
$p = array(
    2 => 'twen',
    3 => 'thir',
    4 => 'for',
    5 => 'fif',
    6 => 'six',
    7 => 'seven',
    8 => 'eigh',
    9 => 'nine',
);

//Populates the $english array for numbers 16-19.
for ($i = 16; $i <= 19; $i++) {
    $b = substr($i, -1, 1);
    $e[$i] = $e[$b] . "teen";
}

//Populates the $english array for numbers 20-99.
for ($i = 20; $i <= 99; $i++) {
    $a = substr($i, -2, 1);
    $b = substr($i, -1, 1);
    if (!$b == 0) {
        $e[$i] = $p[$a] . 'ty-' . $e[$b];
    } else {
        $e[$i] = $p[$a] . 'ty';
    }
}

//Usage
echo 'Easy as ' . $e[1] . ' ' . $e[2] . ' ' . $e[3] . '.';

?>
