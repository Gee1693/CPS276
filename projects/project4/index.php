<?php

$output = "";

if(count($_POST) > 0){
    require_once 'addNames.php';
    $addNames = new addNames();
    $output = $addNames->addClearNames();
}

?>








<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Entering Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
</head>
<body>

    <div class="container">
    
        <h1>Add Names</h1>

        <form action="index.php" method="post">

            <input class="btn-primary btn" type="submit" name="addName" value="Add Name">
            <input class="btn-primary btn" type="submit" name="clearNames" value="Clear Names">

            <div>
                <label for="fullName" class="form-label">Enter Name</label>
                <input type="text" name="fullName" class="form-control" id="fullName" aria-label="Enter your full name"/>

            </div>

            <div>

            <label for="nameList" class="form-label">List of Names</label>
            <textarea style="height: 500px;" class="form-control" id="nameList" name="nameList"><?php echo $output ?></textarea>

            </div>

        </form>

    </div>

</body>
</html>