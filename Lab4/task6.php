<?php
$array = [1, 2, 3, 4, 5]; 
$search_element = 3; 

$found = false;
foreach ($array as $element) {
    if ($element == $search_element) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element $search_element found in the array.\n";
} else {
    echo "Element $search_element not found in the array.\n";
}
?>