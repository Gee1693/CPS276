<?php

$path = "index.php?page=login";


/*$staffNav=<<<HTML
    <nav>
        <ul class="nav navbar">
            <li class="nav-item"><a href="index.php?page=addContact">Add Contact</a></li>
            <li class="nav-item"><a href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
            <li class="nav-item"><a href="index.php?page=login">Logout</a></li>
        </ul>
    </nav>
HTML;*/

$adminNav=<<<HTML
    <nav>
        <ul class="nav navbar">
            <li class="nav-item"><a href="index.php?page=addContact">Add Contact</a></li>
            <li class="nav-item"><a href="index.php?page=deleteContacts">Delete Contact(s)</a></li>
            <li class="nav-item"><a href="index.php?page=addAdmin">Add Admin</a></li>
            <li class="nav-item"><a href="index.php?page=deleteAdmins">Delete Admin(s)</a></li>
            <li class="nav-item"><a href="index.php?page=login">Logout</a></li>
        </ul>
    </nav>
HTML;

if(isset($_GET)){
    if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
        return $adminNav;
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        $result = init();

    }

    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();

    }

    else if($_GET['page'] === "deleteAdmins"){
        require_once('pages/deleteAdmins.php');
        $result = init();

    }

    else if($_GET['page'] === "login"){
        require_once('pages/login.php');
        $result = init();
    }

    else if($_GET['page'] === "logout"){
        require_once('pages/login.php');
        $result = init();
    }

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}




function securityOne() {

    if (session_start($_SESSION['access'] === "accessGranted")); {

        return $staffNav;
    }
}

function securityTwo() {

    if (session_start($_SESSION['status'] === "admin")); {

        return $adminNav;
    }
}





?>