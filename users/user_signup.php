<?php

include_once '../includes/db_connect.php';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $shopname = $_GET['shopname'];
    $shopnumber = $_GET['shopnumber'];
    $phonenumber = $_GET['phonenumber'];
    
    $query_string = "INSERT INTO eajgjaxzxc.users VALUES(NULL, $username, $password, $shopname, $shopnumber, $phonenumber)";
    $results = mysqli_query($db_con, $query_string) or die(mysqli_error($db_con));
    if ($results){
        echo 'User created successfully..';
    }  else {
        echo 'Failed to Create User';
    }
}  else {
    echo 'Please Fill in the Fields';
}

