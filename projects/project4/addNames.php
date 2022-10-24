<?php


class addNames {

    public function addClearNames() {

        foreach($_POST as $value){
            if($value === ""){

                echo "";
                
        
            }
            
        }

        


        if(isset($_POST['addName'])){

            $nmArr = explode(" ",$_POST['fullName']);
           
            $name = $nmArr[1].", ".$nmArr[0] . " \n";

            $namelist = explode("\n", $_POST['nameList']);

            array_push($namelist, $name);

            sort($namelist);

            $output = implode("\n", $namelist);

            return $output;

        }
        
        else if (isset($_POST['clearNames'])){

            return "";
           
        }

    }

}

?>