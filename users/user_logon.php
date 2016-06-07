<?php

include_once '../includes/db_connect.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $query_string = "SELECT * FROM eajgjaxzxc.users WHERE username=$username AND password=$password";
    $results = mysqli_query($db_con, $query_string) or die(mysql_error());
    $rows = mysqli_num_rows($results);
    if ($rows == 1){
        echo $rows;
    }  else {
        echo NULL;
    }
} else {
    echo 'Please provide a username and password';
}