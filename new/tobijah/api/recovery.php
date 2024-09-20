<?php
        include 'php/config.php';
        include 'php/signup.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

        <form action="" method="POST">
        <h2>Reset Password</h2> <br><br>
        <fieldset>
                <strong>New Password:</strong> <br>
                <input type="password" name="password" >
                <br><br>

                <strong>Confirm Password:</strong> <br>
                <input type="password" name="password">
                <br><br>

                <input type="submit" name="submit" value="submit">
        </fieldset>
        </form>
</body>
</html>

