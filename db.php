<?php

    session_start() ;

    // Connecting with the database
    $dbconnection = mysqli_connect(
        'localhost', // hostname
        'root', // username
        '', // password
        'crud' // dbname
    );
?>