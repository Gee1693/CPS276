<?php

//$output = "";

    require_once 'classes/DateTime_Proc.php';
    $notes = new notes();
    $output = $notes->addNote();


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>
<body>
    

<div class="container">
        
        <h1>Add Note</h1>
        
        <a href="displayNotes.php">Display Notes</a>

        <p><?php echo $output?></p>
        

        <form action="index.php" method="post">            

            <div>
                <label for="dateTime" class="form-label">Date and Time</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime">
            </div>

            <div>

                <label for="noteText" class="form-label">Note</label>
                <textarea style="height: 500px;" class="form-control" id="noteText" name="noteText"></textarea>

            </div>

            <div class="gx-3">

                <div class="p-2">

                    <input class="btn-primary btn" type="submit" name="addNote" value="Add Note">

                </div>
                
            </div>

        </form>

    </div>

</body>
</html>