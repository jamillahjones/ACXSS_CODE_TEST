<?php
try {
    // Read the JSON file  
    $json = file_get_contents('../data.json'); 
    
    // Decode the JSON file 
    $json_data = json_decode($json,true); 

    $payload = array($json_data);

    $responseArray = array("success" => true ,"data" => $payload);
    $result = json_encode($responseArray);
    echo $result;
    exit();
} catch (\Throwable $th) {
    $responseArray = array("success" => false ,"message" => $th->getMessage());
    $result = json_encode($responseArray);
    echo $result;
    exit();
}
?>