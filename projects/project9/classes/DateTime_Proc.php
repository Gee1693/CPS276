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

            if($records === 'error'){
                return 'There was an error adding the note';
            }
            else {
                return 'Note has been added';
            }

        } 

    }

    public function displayNotes() {

        $table = "";

        if (isset($_POST['getNotes'])) {

            $date = getdate($timestamp);

            $getdate = $date['mon'] ."/" . $date["mday"] ."/" .$date["year"] ." " .$date["hours"] . ":" .$date["minutes"];

            $pdo = new PdoMethods();

            $sql = "SELECT date_time, note_content FROM displayNotes WHERE date_time BETWEEN :begDate AND :endDate ORDER BY date_time DESC";

            $bindings = [
                
                [':begDate', $timestamp, 'str'],
                [':endDate', $timestamp, 'str'],
            ];

            $records = $pdo->selectBinded($sql, $bindings);

            $table .= "<table border='1' class='table table-striped'><thead><tr>";

            $table .= "<th>Date and Time</th><th>Note</th></thead><tbody>";

            $table .= "<tr><td>$getdate</td><td>$date</td>";

            $table .= "</tbody></table>";


        }

        return $table;

    }

}

?>