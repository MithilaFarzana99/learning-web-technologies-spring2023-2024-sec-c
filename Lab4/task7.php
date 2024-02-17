<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n"; 

for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "\n";
}

echo "\n"; 

for ($i = 0; $i < 3; $i++) {
    for ($j = 'A'; $j < chr(ord('A') + 3 - $i); $j++) {
        echo $j;
    }
    echo "\n";
}
?>