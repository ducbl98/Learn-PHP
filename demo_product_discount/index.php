<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount</title>
    <style>
        fieldset {
            width: 20%;
            font-size: large;
        }
    </style>
</head>
<body>
<form action="display_discount.php" method="post">
    <fieldset>Product Discount<br>
        Product Description<br>
        <input type="text" name="description" placeholder="Description" size="30"><br>
        List Price<br>
        <input type="number" name="price" placeholder="Input List Price" size="30"><br>
        Discount Percent<br>
        <input type="number" name="discount" placeholder="Input Discount" size="30"><br>
        <input id="value" type="submit" value="Calculate">
    </fieldset>
</form>
</body>
</html>
