<?php

require "connection.php";

$data = array();

$result = mysqli_query($connection, "SELECT * FROM postagens");
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
