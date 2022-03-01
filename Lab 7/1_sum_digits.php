<!DOCTYPE html>
<html>

<body>
    <?php
    $num = 12345;
    $x = $num;
    $sum = 0;
    $rem = 0;
    for ($i = 0; $i <= strlen($x); $i++) {
        $rem = $x % 10;
        $sum = $sum + $rem;
        $x = $x / 10;
    }
    echo "Sum of digits of number $num is $sum";
    ?>
</body>

</html>