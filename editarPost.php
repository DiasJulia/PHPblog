<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');
header('Accept: application/json');
header( 'Location: ./');

require "connection.php";
echo json_encode($_POST);
$result = mysqli_query(
    
    $connection,
    "
    UPDATE postagens SET 
    `titulo` = '" . $_POST['titulo'] . "',
    `post` = '" . $_POST['texto'] . "'
    WHERE `id` = '" . $_POST['id'] . "'"
);
echo 1;
