<?php
//Aaron Whipple 2-24-20 database connection
//database conn
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'W01173226';
$DATABASE_PASS = 'Jessencs!';
$DATABASE_NAME = 'W01173226';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno() ) {

// If there is an error with the connection, stop the script and display the error.
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>