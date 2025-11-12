<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'config.php';

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->user_id) && !empty($data->score)) {
    $database = new Database();
    $db = $database->getConnection();
    
    $query = "INSERT INTO rankings SET user_id=?, score=?, time_taken=?";
    $stmt = $db->prepare($query);
    
    $time_taken = isset($data->time_taken) ? $data->time_taken : null;
    
    if($stmt->execute([$data->user_id, $data->score, $time_taken])) {
        $ranking_id = $db->lastInsertId();
        
        http_response_code(201);
        echo json_encode(array(
            "message" => "Score saved successfully",
            "ranking_id" => $ranking_id
        ));
    } else {
        http_response_code(503);
        echo json_encode(array("message" => "Unable to save score"));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to save score. Data is incomplete."));
}
?>