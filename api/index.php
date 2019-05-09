<?php 

require_once("config.php");

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if($_GET['id']){

            $id = $_GET['id'];
            // --  LEFT JOIN only in one specific building array --
            echo json_encode($db->query("SELECT * FROM building WHERE id=".$id.""));
            
        }else{
            //-- json encode all buildings for map --
            echo json_encode($db->query("SELECT * FROM building"));
        }
    }else{
        http_response_code(405);
    }