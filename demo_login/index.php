<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "admin"&&$password==="12345"){
        echo "<h3>Welcome <span style='color: red'>.username.</span> to website</h3>";
    }else{
        echo "<h3><span style='color:red'>Login Error</span></h3>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <style type="text/css">
    </style>
</head>
<body>
<form method="post">
    <div class="login">
        <h2>Login</h2>
        <label>
            Username:
            <input type="text" name="username" size="30" placeholder="username">
        </label>
        <label>
            Password:
            <input type="password" name="password" size="30" placeholder="password">
        </label>
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
</html>
