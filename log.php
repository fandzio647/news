<?php
    session_start();
    $message = "";

    if (count($_POST) > 0) {
        $con = mysqli_connect('localhost', 'root', '', 'news') or die('Unable To connect');
        $result = mysqli_query($con, "SELECT * FROM accounts WHERE name='" . $_POST["Log"] . "' and password = '" . $_POST["pass"] . "'");

        if ($result) {
            $row = mysqli_fetch_array($result);

            if (is_array($row)) {
                $_SESSION["Login"] = $row['name']; // Changed from 'Login' to 'name'
                header("Location:index.php");
            } else {
                $message = "Invalid Username or Password!";
            }
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }

?>


<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="User" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Login</h3>
 Username:<br>
 <input type="text" name="Log">
 <br>
 Password:<br>
<input type="password" name="pass">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>