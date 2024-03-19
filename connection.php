<?php
//turn on error reporting
 error_reporting(E_ALL);
 //display errors to the browser
ini_set('display_errors', 1);
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "cargo");


$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
if ($conn){
    echo "connected successfully!";
}else{
    echo "connection failed: " . mysqli_connect_error();
}


?>