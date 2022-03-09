<?php
setcookie("uid1", "user1");
setcookie("pwd1", "pwd1");
setcookie("uid2", "user2");
setcookie("pwd2", "pwd2");
setcookie("uid3", "user3");
setcookie("pwd3", "pwd3");
setcookie("uid4", "user4");
setcookie("pwd4", "pwd4");
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Authentication</title>
    <style>
        body {
            background-color: pink;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>

<body>
    <h1 align="center">LOGIN</h1>
    <form action="authenticate.php" method="POST">
        <table align="center" cellspacing="10">
            <tr>
                <td><b>Enter Username:</b></td>
                <td><input name="uid" type="text"></td>
            </tr>
            <tr>
                <td><b>Enter Password:</b></td>
                <td><input name="pwd" type="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="Login">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Clear">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>