<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $operand_1 = number_format((float)$_POST['operand_1'], 1, ".", "");
    $operand_2 = number_format((float)$_POST['operand_2'], 1, ".", "");
    $operator = $_POST['operator'];
    $text = "<h1>Result :</h1><br>";
    $result = 0;
    switch ($operator) {
        case "+":
            $result = number_format((float)$operand_1 + $operand_2, 1, ".", "");
            echo $text . $operand_1 . " + " . $operand_2 . " = " . $result;
            break;
        case "-":
            $result = number_format((float)$operand_1 - $operand_2, 1, ".", "");
            echo $text . $operand_1 . " - " . $operand_2 . " = " . $result;
            break;
        case "×":
            $result = number_format((float)$operand_1 * $operand_2, 1, ".", "");
            echo $text . $operand_1 . " × " . $operand_2 . " =" . $result;
            break;
        case "÷":
            try {
                $result = number_format((float)divide($operand_1, $operand_2), 6, ".", "");
                echo $text . $operand_1 . " ÷ " . $operand_2 . " = " . $result;
            } catch (Exception $e) {
                echo 'Message: ' . $e->getMessage();
            }
            break;
    }


}
function divide($op1, $op2)
{
    if ($op2==0) {
        throw new Exception('Division by zero.');
    }
    return $op1 / $op2;
}