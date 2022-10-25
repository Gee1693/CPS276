<?php

$msg = "";

$output = "";



    require_once 'addDirectories.php';
    $directories = new directories();
    $output = $directories->createDirectory();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory Entering Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>
<body>

    
    
    <div class="container">
        
        <h1>File and Directory Assisgnment</h1>
        <p>Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only.</p>
       
        <p><?php echo $output?></p>
        

        <form action="index.php" method="post">            

            <div>
                <label for="folderName" class="form-label">Folder Name</label>
                <input type="text" name="folderName" class="form-control" id="folderName" aria-label="Enter your folder name"/>

            </div>

            <div>

                <label for="nameList" class="form-label">File Content</label>
                <textarea style="height: 500px;" class="form-control" id="fileContent" name="fileContent"></textarea>

            </div>

            <div class="gx-3">

                <div class="p-2">

                    <input class="btn-primary btn" type="submit" name="submit" value="submit">

                </div>
                
            </div>

        </form>

    </div>
    
</body>
</html>