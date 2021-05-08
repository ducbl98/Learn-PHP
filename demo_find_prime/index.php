<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = $_POST['number'];
    $count=0;
    $init=2;
    echo $n." prime number are : <br>";
    while ($count<$n) {
        if (isPrime($init)) {
            echo  $init. " ";
            $count++;
        }
        $init++;
    }
}
function isPrime($n)
{
    $check = true;
    if ($n < 2) {
        $check = false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $check = false;
            break;
        }
    }
    return $check;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find N Prime Number</title>
</head>
<body>
<h2>Find All Prime Number You Want</h2>
<form method="post">
    <fieldset>
        Input the number of prime you want :
        <input type="number" name="number" placeholder="N">
    </fieldset>
</form>
</body>
</html>
