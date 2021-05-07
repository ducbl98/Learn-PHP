<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        fieldset{
            width: 20%;
        }
    </style>
</head>
<body>
<h1>Simple Calculator</h1>
<form method="post" action="display_result.php">
<fieldset>
    <legend>Calculator</legend>
    First Operand
    <input type="number" name="operand_1" size="30"><br>
    Operator
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="×">×</option>
        <option value="÷">÷</option>
    </select><br>
    Second Operator
    <input type="number" name="operand_2" size="30"><br>
    <input type="submit" id="calculate" value="Calculate">
</fieldset>
</form>
</body>
</html>
