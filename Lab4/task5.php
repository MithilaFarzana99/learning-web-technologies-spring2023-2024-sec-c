<?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) { 
        if ($i == 99) {
            echo $i . "." ; 
        } else {
            echo $i . ","; 
        }
    }
}
?>