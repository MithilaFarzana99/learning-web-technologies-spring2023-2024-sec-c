<?php
$a = 3; 
$b = 330; 
$c = 505; 
$largest = $a;

if ($b > $largest) {
    $largest = $b;
}
if ($c > $largest) {
    $largest = $c;
}
echo "The largest number is: $largest\n";
?>