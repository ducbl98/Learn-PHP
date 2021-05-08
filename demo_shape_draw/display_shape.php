<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $height = (int)$_POST['height'];
    $width = (int)$_POST['width'];
    $shape_id = $_POST["shape"];
    $text = "";
    switch ($shape_id) {
        case "1":
            for ($i = 1; $i <= $height; $i++) {
                for ($j = 1; $j <= $width; $j++) {
                    $text .= "*";
                }
                $text .= "<br>";
            }
            break;
        case "2":
            for ($i = 1; $i <= $height; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    $text .= "*";
                }
                $text .= "<br>";
            }
            break;
        case "3":
            for ($i = 1; $i <= $height; $i++) {
                $j=1;
                for ($j=1 ; $j <= $height-$i; $j++) {
                    $text.="&#160&#160";
                }
                for ($j=1 ; $j <= $i; $j++) {
                    $text.="*";
                }
                $text .= "<br>";
            }
            break;
        case "4":
            for ($i = $height; $i >= 1; $i--) {
                for ($j = 1; $j <= $i; $j++) {
                    $text .= "*";
                }
                $text .= "<br>";
            }
            break;
        case "5":
            for ($i = 1; $i <= $height; $i++) {
                $j=1;
                for ($j=1 ; $j <= $i-1; $j++) {
                    $text.="&#160&#160";
                }
                for ($j=1 ; $j <= $height-$i+1; $j++) {
                    $text.="*";
                }
                $text .= "<br>";
            }
            break;
        case "6":
            for($i=1;$i<=$height;$i++){
                $j=1;
                for($j=1;$j<=$height-$i;$j++){
                    $text.="&#160&#160";
                }
                for($j=1;$j<=$i;$j++){
                    $text.="*&#160&#160";
                }
                $text.="<br>";
            }
        case "7":
            for($i=1;$i<=$height;$i++){
                $j=1;
                for($j=1;$j<=$i-1;$j++){
                    $text.="&#160&#160";
                }
                for($j=1;$j<=$height-$i+1;$j++){
                    $text.="*&#160&#160";
                }
                $text.="<br>";
            }
    }
    echo $text;
}