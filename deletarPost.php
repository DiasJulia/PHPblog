<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
header('Accept: application/json');
header( 'Location: ./');

require "connection.php";

$data = array();
$result = mysqli_query(
    $connection,
    "
    DELETE FROM postagens WHERE `id` = '" . $_GET['id'] . "'"
);
echo 1;
