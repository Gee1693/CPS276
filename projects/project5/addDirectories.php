<?php

//$msg = "";
//$addDirectory = "";


class directories {

    public function createDirectory() {

        if (isset($_POST['submit'])) {

            //ADDS USER CREATED DIRECTORY
            $addDirectory = mkdir("directories/" .$_POST["folderName"]); 

            chmod("directories/" .$_POST["folderName"], 0777);


            //ADDS THE README.TXT FILE INTO THE USER CREATED DIRECTORY
            chmod("directories/" .$_POST["folderName"] ."/" ."readme.txt", 0777);

            
            //ADDS USER TEXT INSIDE THE README.TXT FILE
            $file = fopen("directories/" .$_POST["folderName"] ."/" ."readme.txt", "w");
            $content = $_POST["fileContent"];
            fwrite($file,$content);
            fclose($file);
        
            
            //LOGIC FOR SUMBIT BUTTON
            if ($addDirectory) {
                $msg = "File and directory were created";
                $msg .= "<p><a href='directories/".$_POST['folderName']."/readme.txt'>Path where file is located</a></p>";
                
            }
            else {
                $msg = "A directory already exist with that name";
                $msg .= "<p><a href='directories/".$_POST['folderName']."/readme.txt'>Path where file is located</a></p>";

            }

            return $msg;
            

        }


    } 

}

?>