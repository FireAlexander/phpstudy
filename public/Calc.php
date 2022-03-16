<!DOCTYPE HTML>
<html lang="ru"
<head>
    <meta charser = "UTF=8"
</head>
<body>
    <h2>Calculator</h2>
<!-- below forms for calculator --!>
    <form action="" method="post" class="calculator">
    <!-- field for first number --!>
    <input type="text" name="First_number" class="numbers" placeholder="First number">
    <select class="operations" name="operation">
    <!-- list of operations --!>
        <option value='plus'>+ </option>
        <option value='minus'>- </option>
        <option value='multiply'>* </option>
        <option value='divide'>/ </option>
    </select>
<!-- field for second number --!>
    <input type="text" name="Second_number" class="numbers" placeholder="Second number">
<!-- calculate --!>
    <input class="submit_form" type="submit" name="submit" value="Get answer">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    //filing value
    $number1 = $_POST['First_number'];
    $number2 = $_POST['Second_number'];
    $operation = $_POST['operation'];
    //Are fields filed?
    if(empty($operation) || (empty($number1) && $number1 != '0') || (empty($number2) && $number2 != '0')) {
        $error_message = 'One or more fields are not filed';
    }
    else {
        //Are there number in the fields?
        if (!is_numeric($number1) || !is_numeric(($number2))) {
            $error_message = 'One or more operands are not number';
        } else {
            // checking the type of operation
                switch($operation) {
                    case 'plus':
                        $result = $number1 + $number2;
                        break;
                    case 'minus':
                        $result = $number1 - $number2;
                        break;
                    case 'multiply':
                        $result = $number1 * $number2;
                        break;
                    case 'divide':
                        if ($number2 == '0') {$error_message = 'Division by zero';}
                        else {
                            $result = $number1 / $number2;
                            break;
                        }
                }
        }
    }
    if(isset($error_message)) {
        echo $error_message;
    } else{
        echo "Answer: $result";
    }

}
?>