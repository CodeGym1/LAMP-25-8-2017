<?php
require 'Calculator.php';
$result = null;
$firstNumber = 0;
$secondNumber = 0;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstNumber = $_POST['firtNumber'];
    $secondNumber = $_POST['secondNumber'];
    $operator = $_POST['operator'];
    $calculator = new Calculator();
    switch ($operator){
        case  '+':
            $result = $calculator->add($firstNumber, $secondNumber);
            break;
        case  '-':
            $result = $calculator->sub($firstNumber, $secondNumber);
            break;
    }
}
?>

<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="title"> <h2>Simple Calculator</h2></div>
    <div class="main">
        <form action="index.php" method="post">
            <div>
                <span>FirtNumber:</span>
                <input type="input" name="firtNumber" value="0">
            </div>
            <div>
                <span>Operator:</span>
                <select name="operator">
                    <option>+</option>
                    <option>-</option>

                </select>
            </div>
            <div>
                <span>SecondNumber:</span>
                <input type="input" name="secondNumber" value="0">
            </div>
            <div>
                <span>Result </span> <?= $result ?>
            </div>
            <input type="submit" value="Caculate">
        </form>
    </div>
</body>
</html>
