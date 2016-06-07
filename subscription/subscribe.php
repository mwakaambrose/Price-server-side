<?php

include_once '../includes/db_connect.php';
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $query_string = "INSERT INTO eajgjaxzxc.subscribers VALUES (NULL , $username)";
    $results = mysqli_query($db_con, $query_string) or die(mysql_error());
    echo 'subscribed sucessfully..';
} else {
    echo 'Please provide an email';
}
