<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="username">Username</label><br>
    <input type="text" name="regisUsername" id="username"><br>
    <label for="password">Password</label><br>
    <input type="password" name="regisPassword" id="password"><br>
    <label for="password">Confirm Password</label><br>
    <input type="password" name="confirmPassword" id="confirmpassword"><br>
    <input type="submit" name="regisSubmit" value="Submit">
  </form>
  
</body>
</html>