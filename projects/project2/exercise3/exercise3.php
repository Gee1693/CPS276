<?php

$table = "<table border='1'>";

    for ($i=1; $i<16; $i++) {

            $table .= "<tr>$i";

            $table .= "<td>";
        for ($j=1; $j<=5; $j++) {

            $table .= "<td> Row $i Cell $j";


        }

        $table .= "</tr>";

    }

    $table .= "</table>";
    
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
    
    <table>

        <tbody>

            <td><?php echo $table;?></td>

        </tbody>

    </table>

</body>
</html>