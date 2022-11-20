<?php

require 'Pdo_methods.php';

class notes {


    public function addNote(){

        $msg = "";

        $pdo = new PdoMethods;

        if (isset($_POST['addNote'])) {

            $timestamp = strtotime($_POST['dateTime']);

            $pdo = new PdoMethods();

            $sql = "INSERT INTO displayNotes (date_time, note_content) VALUES (:dateTime, :noteText)";

            $bindings = [
                
                [':dateTime', $timestamp, 'str'],
                [':noteText', $_POST['noteText'], 'str']
            ];

            $records = $pdo->selectBinded($sql, $bindings);

            $file = fopen("classes/displayNotes", "w");
            $content = $_POST["noteText"];
            fwrite($file,$content);
            fclose($file);

            $msg = "Note has been added";

        } 

        return $msg;

    }

    public function displayNotes() {

        $table = "";

        if (isset($_POST['getNotes'])) {

            $pdo = new PdoMethods();

            $sql = "SELECT date_time, note_content FROM displayNotes WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";

            /*$bindings = [
                
                [':begDate', $_POST['startDate'], 'str'],
                [':endDate', $_POST['endDate'], 'str'],
            ];*/

            $records = $pdo->selectNotBinded($sql);

            
           //$records = $pdo->selectBinded($sql, $bindings);

            //$date = getDate($records);


            //$records = $pdo->selectNotBinded($sql);

            //$timestamp = strtotime($_POST['dateTime']);

            //$timestamp = strtotime($_POST['startDate']);

            //$begDate = getDate($timestamp);

            //$endDate = getDate($timestamp);

            //$table = "<table class=''



            $table .= "<table border='1' class='table table-striped'><thead><tr>";

            $table .= "<th>Date and Time</th><th>Note</th></thead><tbody>";

            $table .= "<tr><td>$sql</td><td>$sql</td>";

            $table .= "</tbody></table>";


                /*for ($i=1; $i<16; $i++) {

                        $table .= "<tr>";

                    for ($j=1; $j<=5; $j++) {

                        $note = $_POST['noteText'];

                        $table .= "<td> $note";


        }

        $table .= "</tr>";

    }

    $table .= "</table>";*/

            //$sql = "INSERT INTO project9 (file_name, file_path) VALUES (:fname, fpath)";


        }

        return $table;

    }

}

?>