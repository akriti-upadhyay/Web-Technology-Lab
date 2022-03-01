<!DOCTYPE html>
<html>
<body>
    <?php  
        $num = 12345;  
        $revnum = 0;  
        while ($num > 1)  
        {  
        $rem = $num % 10;  
        $revnum = ($revnum * 10) + $rem;  
        $num = ($num / 10);   
        }  
        echo "<h3>Reverse number of 12345 is:</h3> $revnum";  
    ?>  
</body>
</html>