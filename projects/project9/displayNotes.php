<?php

$output = "";

require_once 'classes/DateTime_Proc.php';
$notes = new notes();
$output = $notes->displayNotes();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Notes Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>
<body>
    

<div class="container">
        
        <h1>Display Notes</h1>
        <!--<p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>-->
        

        <form action="displayNotes.php" method="post">            

            <div>
                <label for="startDate" class="form-label">Beginning Date</label>
                <input type="datetime-local" class="form-control" id="startDate" name="startDate">
            </div>

            <div>
                <label for="endDate" class="form-label">Ending Date</label>
                <input type="datetime-local" class="form-control" id="endDate" name="endDate">
            </div>

            <div class="gx-3">

                <div class="p-2">

                    <input class="btn-primary btn" type="submit" name="getNotes" value="Get Notes">

                </div>
                
            </div>

        </form>

        <?php echo $output;?>

    </div>

</body>
</html>