<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shape Draw</title>
    <style>
        fieldset{
            width: 25%;
        }
    </style>
</head>
<body>
<h1>Draw Shape</h1>
<form method="post" action="display_shape.php">
    <fieldset>
        <legend>Choose Shape</legend>
        Shape :
        <select name="shape">
            <option value="1">Rectangle</option>
            <option value="2">Square Triangle Top-Left</option>
            <option value="3">Square Triangle Top-Right</option>
            <option value="4">Square Triangle Bottom-Left</option>
            <option value="5">Square Triangle Bottom-Right</option>
            <option value="6">Isosceles-Up Triangle</option>
            <option value="7">Isosceles-Down Triangle</option>
        </select><br>
        Height :
        <input type="number" name="height" size="30"><br>
        Width :
        <input type="number" name="width" size="30"><br>
        <input type="submit" value="Draw" id="draw"><br>
    </fieldset>
</form>
</body>
</html>
