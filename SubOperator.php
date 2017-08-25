<?php
class SubOperator implements IOperator {
    public function execute($firstNumber, $secondNumber) {
        return $firstNumber - $secondNumber;
    }
}
?>