<?php 

require_once("config.php");

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if($_GET['id']){

            $id = $_GET['id'];
            // --  LEFT JOIN only in one specific building array --
            echo json_encode($db->query("SELECT * FROM building WHERE id=".$id.""));
            
        }else{
            //-- json encode all buildings for map --

            $data = $db->query("SELECT building.id as id, education.id as education_id, education.building_id, education.name FROM building LEFT JOIN education ON building.id=education.building_id");

            // print_r($data);


            $lastResultId = NULL;
            $jsonData = array();

            foreach($data as $result){

                // if result id is new (create new array)
                if($result['id'] != $lastResultId){
                    // echo ' aanmaken '. $result['id'];

                    
                    $tPost = stdClass();
                    $tPost->id = $result['id'];
                    
                
                    // check if building has educations
                    if($result['building_id'] != ''){
                        // $newArray['education_id'] = $result['education_id'];
                        // $newArray['building_id'] = $result['building_id'];
                        
                        $tPost->education = array();
                    }

                    $jsonData[] = $tPost;

                }

                // if result id is the same (add education to sub array)
                else{

                    // check if building has educations
                    if($result['building_id'] != ''){
                        //voeg education toe aan array.
                        $tPost->education[] = $result['name'];
                    }
                    
                }


                $lastResultId = $result['id'];
            }


           print_r($jsonData);
            
        }
    }else{
        http_response_code(405);
    }