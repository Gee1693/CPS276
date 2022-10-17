<?php

$str = "Programming in PHP is cool";
$arr = explode(" ",$str);
echo "<pre>";
print_r($arr);
echo "</pre>";

$arr = array("Programming","in","PHP","is","cool");
$str = implode($arr); //BREAK ON EVERY COMMA AND CREATES ONE LONG STRING
echo "$str<br />";
$str = implode(" ",$arr); //BREAK ON EVERY COMMA AND INSERTS A SPACE
echo "$str<br />";
$str = implode("--",$arr); //BREAK ON EVERY COMMA AND INSERTS A "--"
echo "$str<br />";


// CODE FOR ASSISGNMENT 4

<?php

class addNames {

    public function addClearNames() {

        foreach($_POST as $value){
            if($value === ""){

                echo "";
                //header('Location: index.php');
                //exit;
            }
        }


        if(isset($_POST['addName'])){
            //hea   der("Location: index.php?fname={$_POST['fullName']}");
            //$nmArr = explode(" ",$_POST['fullName']);

            //

            /*$nmArr = explode(" ",);
            array_push($nmArr, $_POST['fullName']);
            $name = $nmArr[1].", ".$nmArr[0];
            //array_push($nmArr, $_POST['fullName']);
            sort($nmArr);
            $nmStr = implode(" ", $nmArr);*/

            //

            $nmArr = explode(" ",$_POST['fullName']);
            //array_push($nmArr, $_POST['fullName']); // Array is wrong
            $name = $nmArr[1].", ".$nmArr[0] . " \n";

            $namelist = explode("\n", $_POST['nameList']);


            array_push($namelist, $name);

            sort($namelist);

            $output = implode("\n", $namelist);

            return $output;




            //array_push($nmArr, $_POST['fullName']);
            //sort($nmArr); // Array is wrong
            //$nmStr = implode(" ", $nmArr);

            //

            //getType($name);

            //$backSlash = explode(" ","/n");
            //$newName = $nmArr[1]."/n".$nmArr[0];
            //$name = $nmArr[1].", ".$nmArr[0];


            //return $name;

            //header("Location: ../acknowledgment3.php?fname={$_POST['fullName']}");
        }
        
        else if(isset($_POST['clearNames'])){

            return "";
            //header("Location: index.php");
        }

    }

}

?>

/*Hint for assignment 4: In a TEXT AREA section in form seperate the information in that section with \n instead of <br>.*/ 

//Mr. Shaper's russet server examples https://russet-v8.wccnet.edu/~sshaper/cps276_examples/

/*require_once "Calculator.php";
$Calculator = new Calculator();
echo $Calculator->calc("/", 10, 0); //will output Cannot divide by zero
echo $Calculator->calc("*", 10, 2); //will output The product of the numbers is 20
echo $Calculator->calc("/", 10, 2); //will output The division of the numbers is 5
echo $Calculator->calc("-", 10, 2); //will output The difference of the numbers is 8
echo $Calculator->calc("+", 10, 2); //will output The sum of the numbers is 12
echo $Calculator->calc("*", 10); //will output You must enter a string and two numbers
echo $Calculator->calc(10); //will output You must enter a string and two numbers*/

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