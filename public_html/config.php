<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', /*INSERT DB SEVER HERE */);
define('DB_USERNAME', /*INSERT DB USERNAME HERE */);
define('DB_PASSWORD', /*INSERT DB PASSWORD HERE */ );
define('DB_NAME', /*INSERT DB NAME HERE */);
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>