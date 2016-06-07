<?php
include_once '../includes/db_connect.php';
header("Content-type:json");
$query_string = "SELECT * FROM eajgjaxzxc.clothing";
$results = mysqli_query($db_con, $query_string);
$rows = array();
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
    $rows[] = $row;
}
echo json_encode($rows);
