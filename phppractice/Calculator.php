<?php


class Calculator {

    private $_num1;
    private $_num2;

    public function calc($operator="er", $num1="er", $num2="er") {

        $this->_num1 = $num1;
        $this->_num2 = $num2;

        if ($operator === "+" and getType($this->_num1) === "integer" and getType($this->_num2) === "integer") {

            return $this->add();
        }

        else if ($operator === "-" and getType($num1) === "integer" and getType($num2) === "integer") {

            return $this->subtract();
        }

        else if ($operator === "*" and getType($num1) === "integer" and getType($num2) === "integer") {

            return $this->multiply();
        }

        else if ($operator === "/" and getType($num1) === "integer" and $num2 === 0) {

            return "Cannot divide by 0<br>";
        }

        else if ($operator === "/" and getType($num1) === "integer" and $num2 === 2) {

            return $this->divide();
        }


        else {
            return "You must enter a string and two numbers<br>";
        }

        if ($operator === "" and $num2 === 0) {

            echo "You cannot divide by zero";
        }


    }

    function add() {

        $sum = $this->_num1 + $this->_num2;    
        echo "The sum of the numbers is ${sum}<br>";
        
    }

    function subtract() {

        $difference = $this->_num1 - $this->_num2;
        echo "The difference of the numbers is ${difference}<br>";
    }

    function multiply() {

        $product = $this->_num1 * $this->_num2;
        echo "The product of the numbers is ${product}<br>";
    }

    function divide() {

        $division = $this->_num1 / $this->_num2;
        echo "The division of the numbers is ${division}<br>";

    }


}

?>