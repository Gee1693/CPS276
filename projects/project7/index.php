<?php

$msg= "";

$output= "";

require_once 'fileUploadProc.php';
$upload = new upload();
$output = $upload->fileUpload();

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>
<body>

    <div class="container">
    
        <h1>File Upload</h1>

        <p><?php echo $msg?></p>

        <form action="index.php" method="post">

            <div>

                <label for="fileName" class="form-label">File Name</label>
                <input type="text" name="fileName" class="form-control" id="fileName" aria-label="Enter your file name"/>

            </div>

            <div class="gx-3">

                <div class="p-2">

                    <input type="file" name="pdf" id="pdf"></input>
                
                </div>

            </div>

            <div class="gx-3">

                <div class="p-2">

                    <input class="btn-primary btn" type="submit" name="upload" value="Upload File">

                </div>

            </div>

        </form>

    </div>

</body>
</html>