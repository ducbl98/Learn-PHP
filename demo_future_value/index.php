<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $invest=(int)$_POST["invest"];
    $interest=(float)$_POST["interest"];
    $year=(int)$_POST["year"];
    $future_value=0;
    for ($i=0;$i<$year;$i++){
        $future_value=$invest*(1+$interest);
        $invest=$future_value;
    }
    echo "The Future Value after ".$year." is ".$future_value;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Future Value</title>
    <style>
        fieldset{
            width: 20%;
            font-size: large;
        }
    </style>
</head>
<body>
<form method="post">
    <fieldset>Future Value<br>
        Investment Amount<br>
        <input type="number" name="invest" placeholder="Input Investment" size="30"><br>
        Yearly Interest Rate<br>
        <input type="text" name="interest" placeholder="Input Interest" size="30"><br>
        Number of Years<br>
        <input type="number" name="year" placeholder="Input Year" size="30"><br>
        <input id="value" type="submit" value="Compute">
    </fieldset>
</form>
</body>
</html>
