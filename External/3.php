<?php
$lines = 10;
$i;
$j;
$count;
for ($i = 1; $i <= $lines; $i++) {
    $count = 0;
    for ($j = 1; $j < $lines; $j++) {
        if ($count < $i - 1) {
            if (!($j < $lines - $i + 1)) {
                echo $j;
                $count++;
            }
        }
    }
    echo '0';
    $count = 0;
    for (--$j; $j >= 1; $j--) {

        if ($count < $i - 1) {
            echo $j;
            $count++;
        }
    }
    echo "<br>";
}
