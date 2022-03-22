<?php {
    $num = 5;
    // Upper-half of the Pattern
    for ($i = 0; $i < $num; $i++) {
        for ($k = $num; $k > $i; $k--) {
            echo ("*");
        }
        for ($j = 0; $j <= $i; $j++) {
            echo "&nbsp;";
        }
        for ($s = 0; $s < $i; $s++) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($r = $num; $r > $i; $r--) {
            echo ("*");
        }
        echo "<br>";
    }
    // Lower-half of the Pattern
    for ($i = $num - 1; $i > 0; $i--) {
        for ($k = $num - 1; $k >= $i - 1; $k--) {
            echo ("*");
        }
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;";
        }
        for ($s = $i - 1; $s > 0; $s--) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($r = $num; $r >= $i; $r--) {
            echo ("*");
        }
        echo "<br>";
    }
}
