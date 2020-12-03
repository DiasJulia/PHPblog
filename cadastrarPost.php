<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: *');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');
    header('Accept: application/json');
    header( 'Location: ./');

    if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
        require "connection.php";
        
         $data['content'] = "
         INSERT INTO postagens(
             `titulo`, 
             `post`)
         values(
             '". $_POST["titulo"] ."', 
             '". $_POST["texto"] ."'
         )";
        
        $result = mysqli_query($connection, "
            INSERT INTO postagens(
                `titulo`, 
                `post`)
            values(
                '". $_POST["titulo"] ."', 
                '". $_POST["texto"] ."'
            )");
            echo 1;
        echo json_encode($data['content']);
        
            
    }else{
        echo 0;
    }
