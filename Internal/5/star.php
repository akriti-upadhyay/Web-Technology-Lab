<?php {
    echo "<h4> Star Pattern: </h4>";
    // Upper Half Star
    $num = intval($_POST["num"]);
    for ($i = 0; $i < $num; $i++) {
        for ($k = $num; $k > $i + 1; $k--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j <= $i; $j++) {
            echo ("&nbsp; *");
        }
        echo "<br>";
    }
    // Lower Half Star
    for ($i = $num - 1; $i > 0; $i--) {
        for ($k = $num - 1; $k >= $i; $k--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j < $i; $j++) {
            echo ("&nbsp; *");
        }
        echo "<br>";
    }
}
