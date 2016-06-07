<?php

include_once '../includes/db_connect.php';
//header("Content-type:json");
if (isset($_GET['name'])) {
    $item_name = $_GET['name'];
    $item_price = $_GET['price'];
    $item_date = $_GET['date'];
    $query_string = "INSERT INTO eajgjaxzxc.shopItems VALUES(null, $item_name, $item_price, $item_date, NULL);";
    mysqli_query($db_con, $query_string) or die("Failed to Add Item");
    echo 'Item Added Successfully';
}
