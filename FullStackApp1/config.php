<?php
session_start();

$host = 'db';    /* Host name */
$user = 'php_docker';         /* User */
$password ='password';         /* Password */
$dbname = 'php_docker';   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname); /* -php-ext-install mysqli */

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
