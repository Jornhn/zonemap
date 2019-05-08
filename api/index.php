<?php 

require_once("config.php");

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if($_GET['id']){

            $id = $_GET['id'];
            echo json_encode($db->query("SELECT * FROM locations WHERE id=".$id.""));
            
        }else{
            
            echo json_encode($db->query("SELECT * FROM locations"));
        }
    }else{
        http_response_code(405);
    }