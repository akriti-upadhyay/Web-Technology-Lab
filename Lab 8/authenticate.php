<!DOCTYPE html>
<html>

<head>
    <title>User Authentication</title>
</head>

<body>
    <?php
    // user1
    if ($_POST["uid"] == $_COOKIE["uid1"] && $_POST["pwd"] == $_COOKIE["pwd1"]) {
        echo "Welcome " . $_POST["uid"];
    }
    // user2
    else if ($_POST["uid"] == $_COOKIE["uid2"] && $_POST["pwd"] == $_COOKIE["pwd2"]) {
        echo "Welcome " . $_POST["uid"];
    }
    // user3
    else if ($_POST["uid"] == $_COOKIE["uid3"] && $_POST["pwd"] == $_COOKIE["pwd3"]) {
        echo "Welcome " . $_POST["uid"];
    }
    // user4
    else if ($_POST["uid"] == $_COOKIE["uid4"] && $_POST["pwd"] == $_COOKIE["pwd4"]) {
        echo "Welcome " . $_POST["uid"];
    }
    // not authenticated
    else {
        echo "Sorry, You are not an Authenticated User!!";
    }
    ?>
</body>

</html>