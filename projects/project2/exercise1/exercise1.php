<?php

/*$numberOne = 1;*/

$numberOne = "<ul>";

$subNums = '';

    for ($i=1; $i<5; $i++) {

            $numberOne .= "<li>$i";

            $numberOne .= "<ul>";
        for ($j=1; $j<=5; $j++) {

            $numberOne .= "<li>$j</li>";


        }

        $numberOne .= "</ul></li>";

    }

    $numberOne .= "</ul>";


/*$subOne = array(1, 2, 3, 4);

for ($i=1; $i<=5; $i++) {

    echo "$i<br>";

}*/


/*$SubOne = for ($i=1; Si <=10; $i++) {

    echo "$i<br>";
}*/

?>







<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
        <?php echo $numberOne;?>

    
    
</body>
</html>