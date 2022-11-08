<?php

class upload {

    public function fileUpload() {

        if (isset($_POST['upload'])) {
            
            //TEST 1
            $addFile = fopen("pdfFolder/" .$_POST['fileName'], "w");
            
            
            //TEST 2
            /*$uploadFile = fopen("pdfFolder/pdf.file");
            $content = $_POST['fileName'] .$_FILES['pdf'];
            fwrite($uploadFile, $content);
            fclose($uploadFile);*/

            $file = fopen("pdfFolder/" ."file.pdf", "w");
            $content = $_POST["fileName"];
            fwrite($file,$content);
            fclose($file);

            if ($addFile) {

                $output .= "<p><a href='pdfFolder/file.php'>Path where file is located</a></p>";
            }

            return $output;

            //CHECK TO SEE IF FILE WAS UPLOADED
            if ($_FILES["pdf"]["error"] === 4) {
                
                $msg = "No file was uploaded. Make sure you choose a file to upload.";
            
            }
            
            //CHECK TO SEE IF THE FILE SIZE IS TOO BIG
            else if ($_FILES["pdf"]["size"] > 100000 || $_FILES["pdf"]["error"] === 1) {

                $msg = "File is too big";
            }

            return $msg;

            if ($addFile) {
                $msg2 = "File and directory were created";
                //$msg .= "<p><a href='directories/".$_POST['folderName']."/readme.txt'>Path where file is located</a></p>";
                
            }

            return $msg2;

        }

    }

}

?>