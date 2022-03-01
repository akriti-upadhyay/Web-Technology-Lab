<!DOCTYPE html>
<html>

<body>
    <?php
    $num = 5;
    $ans = 1;
    for ($i = 1; $i <= $num; $i++) {
        $ans = $i * $ans;
    }
    echo "Factorial of $num is $ans ";
    ?>
</body>

</html>