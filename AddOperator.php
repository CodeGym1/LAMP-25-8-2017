
<?php
class AddOperator implements IOperator {
    public function execute($firstNumber, $secondNumber) {
        return $firstNumber + $secondNumber;
    }
}
?>