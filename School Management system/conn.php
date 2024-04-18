<?php

$server = 'localhost:3308';
$username = 'root';
$password = '';
$database = 'schoolm';

$conn = new  mysqli($server, $username, $password, $database);

if($conn->connect_error)
{
    die("Connection failed : " . $conn->connect_error);
}
 //echo 'Connection Successfully...';

?>