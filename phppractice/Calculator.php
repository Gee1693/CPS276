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

<?php

/*$msg = "";
$anchor = "";
$addDirectory = "";

class directories {

    public function createDirectory() {

        if (isset($_POST['submit'])) {

            // TEST #1
            //$addDirectory = mkdir("/home/g/m/gmartinjr/public_html/CPS276/projects/project5/directories/folder" .$_POST["folderName"]);
            //chmod("/home/g/m/gmartinjr/public_html/CPS276/projects/project5/directories/folder" .$addDirectory, 0777);
            
            // TEST #2 

            //ADDS USER CREATED DIRECTORY
            $addDirectory = mkdir("directories/".$_POST["folderName"]); 

            chmod("directories/" .$_POST["folderName"], 0777);


            //ADDS THE README.TXT FILE INTO THE USER CREATED DIRECTORY
            //touch("directories/" .$_POST["folderName"] ."/" ."readme.txt");

            //$anchor = touch("directories/" .$_POST["folderName"] ."/" ."readme.txt");

            //return $anchor;


            chmod("directories/" .$_POST["folderName"]."/" ."readme.txt", 0777);

            
            
            //ADD USER TEXT INSIDE THE README.TXT FILE
            $file = fopen("directories/" .$_POST["folderName"] ."/" ."readme.txt", "w");
            $content = $_POST["fileContent"];
            fwrite($file,$content);
            fclose($file);
            //$file = touch("directories/readme.txt");
            //chmod("directories/readme.txt", 0777);
            
            
            //LOGIC FOR SUMBIT BUTTON
            if ($addDirectory) {
                $msg = "File and directory were created";
                $msg .= "<p><a href='directories/".$_POST['folderName']."/readme.txt'>Path where file is located</a></p>";
                $msg = '';
            }
            else {
                $msg = "A directory already exist with that name";
                $msg .= "<p><a href='directories/".$_POST['folderName']."/readme.txt'>Path where file is located</a></p>";

            }

            return $msg;

            //LOGIC FOR REMOVE BUTTON
            if(isset($_POST['remove'])){
                $addDirectory = rmdir($_POST["folderName"]);
                if($addDirectory){
                  $msg = "Directory Removed";
                }
                else{
                  $msg = "There was an issue removing the file";
                }
              }

              return $msg;
            
            
            
            
            //****TEST AND EXPERIMENTATION CODE****/
            //touch($_POST["folderName"], "readme.txt");
            
            //chmod("directories/readme.txt", 0777);

            //fopen("directories/readme.txt", "w");

            //fopen("directories/" .$_POST["folderName"] ."readme.txt", "w");

            //touch("directories/" .$_POST["folderName"] ."readme.txt");




            //$file = fopen($_POST["folderName"] ."readme.txt", "w");

            //chmod($file, 0777);

            //touch("directories/" .$_POST["folderName"], "readme.txt", 0777);





            // TEST #3
            //$addDirectory = $_POST["folderName"];
            //mkdir("/" .$addDirectory);


            //mkdir($addDirectory);
            //chmod($addDirectory, 0777);
            //chmod("directories/" .$addDirectory, 0777);
            

            //chmod($addDirectory, 0777);

            //$addDirectory = mkdir('newdirectory');




        }

    } 

}

?>