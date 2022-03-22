<?php

$count = intval($_POST["num"]);;
echo "<h4> Number Triangle: </h4>";
echo "<pre>";
for ($i = 1; $i <= $count; $i++) {
    echo str_pad("", $count - $i, " ", STR_PAD_LEFT);
    for ($j = 1, $up = true; $j > 0; $up ? $j++ : $j--) {
        echo $j;
        if ($j == $i) {
            $up = false;
        }
    }
    echo "<br>";
}
echo "</pre>";
