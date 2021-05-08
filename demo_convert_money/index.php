<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usd = (int)$_POST['usd'];
    $vnd = $usd * 23000;
    echo "Money Convert From VND To USD is : ".$vnd;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convert Money</title>
</head>
<body>
<h2>USD To VND</h2>
<form method="post">
    <fieldset style="width: 25%">
        <legend>Convert Money</legend>
        Input USD :
        <input type="number" name="usd" placeholder="USD"><br>
        <input type="submit" value="Convert">
    </fieldset>
</form>

</body>
</html>
