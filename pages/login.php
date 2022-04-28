<?php

require("../php/head-base.php");

require("../system/request.php");

// Account attempt
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $logtype;

    if (isset($_POST["register"])) $logtype = "REGISTER";
    else if (isset($_POST["login"])) $logtype = "LOGIN";

    if (!isset($logtype))
        die("Something is wrong there pal");//useful and descriptive error messages ftw
    
    $result = request("actions/account.php", [
        "logType" => $logtype,
        "username" => $_POST["username"],
        "password" => $_POST["password"]
    ]);

    print("Result : ");
    var_dump($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php make_head_base("Login"); ?>
</head>

<body>
    <div class="content">
        <h1 class="title">Adventure Online Online</h1>
        <h2 class="subtitle">This has gone too far.</h2>
        <form class="account-form" action="" method="post">
            <div class="info-container">
                <label for="username">Username</label>
                <input class="field text" type="text" id="username" name="username" placeholder="McMole Voxelman" required>
                <label for="password">Password</label>
                <input class="field text" type="password" id="password" name="password" required>
            </div>
            <input class="field button" type="submit" id="register" name="register" value="Register">
            <input class="field button" type="submit" id="login" name="login" value="Login">
        </form>
    </div>
</body>
</html>