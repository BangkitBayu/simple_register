<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "signup_session";

$db = mysqli_connect($hostname , $username , $password , $db_name);

if($db -> connect_error) {
    echo "Failed to connect database";
    die('Failed');
};

?>