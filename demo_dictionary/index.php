<?php
$dictionary = [
    "captivating" => "thú vị",
    "paramount" => "quan trọng",
    "pertinent" => "liên quan",
    "moreover" => "hơn nữa",
    "myriad" => "nhiều",
    "assist" => "hỗ trợ",
    "consider" => "suy nghĩ",
    "plethora" => "rất nhiều",
    "trivago" => "khách sạn",
    "ubiquitous" => "phổ cập",
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description) {
        if ($word===$searchWord){
            echo "Word: " . $word . " <br/>means: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if($flag==0){
        echo "Not found";
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
    <title>Dictionary</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 12px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>English Vietnamese Dictionary</h2>
<form method="post">
    <input type="text" placeholder="Input Word" name="search">
    <input type="submit" id="submit" value="Search">
</form>
</body>
</html>
