<?php

require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); //will output Cannot divide by zero
echo $Calculator->calc("*", 10, 2); //will output The product of the numbers is 20
echo $Calculator->calc("/", 10, 2); //will output The division of the numbers is 5
echo $Calculator->calc("-", 10, 2); //will output The difference of the numbers is 8
echo $Calculator->calc("+", 10, 2); //will output The sum of the numbers is 12
echo $Calculator->calc("*", 10); //will output You must enter a string and two numbers
echo $Calculator->calc(10); //will output You must enter a string and two numbers

/*$hello = 'Hello World';

$name = 'Gary';

class Calculator {

    public function calc($operator="er", $num1="er", $num2="er") {

        if ($operator === "+" and getType($num1) === "integer" and getType($num2) === "integer") {

            return $this->add();
        }

        if ($operator === "-" and getType($num1) === "integer" and getType($num2) === "integer") {

            return $this->subtract();
        }

    }

    function add() {

            echo "The sum of the numbers is 12";
        
    }

    function subtract() {

        echo "The difference of the numbers is 8";
    }

}

$Calculator = new Calculator();

echo $Calculator->calc("+", 10, 2);
echo $Calculator->calc("-", 10, 2);

/*function myFunction($operator, $num1, $num2) {

    if (getType($operator === "+" and $num1 === "integer" and getType($num2 === "integer"))) {

        echo "The sum of the numbers is 12";
    }

    else {

        echo "The difference of the numbers is 8";
    }

    /*if (getType($num1) === "integer" and $operator === "+" and getType($num2) === "integer") {

        echo "The sum of the numbers is 12";
    }

    else {

        echo "The difference of the numbers is 8";
    }

    echo getType($num1);
    echo getType($num2);*/

//}



//echo myFunction(+, 10, 2);




/*class Car {
    
}

$mustang = new Car();

print_r($mustang);

/*class Calculator {
    function hello() {
        echo "Hello World";
    }
}*/

 /*function opMethod($num1,$operator,$num2){

    $operator = "+";
    return $num1; $num2;

}

echo opMethod(40, $operator, 20)*/

/*function hello(){

    $hello = 2 + 4;
    return $hello;
}


echo hello()*/

    


/* DO THIS FOR OBJECTS SO THAT IT DOES NOT SHOW UP AS ONE BIG STRING*
echo "<pre>";
print_r()*/

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--<p><?php echo $hello;?></p>-->
    <!--<p><?php echo $name;?></p>-->
    
</body>
</html>