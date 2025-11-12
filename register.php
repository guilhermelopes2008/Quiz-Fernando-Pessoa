<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once 'config.php';

$data = json_decode(file_get_contents("php://input"));

if(!empty($data->username) && !empty($data->email) && !empty($data->password)) {
    $database = new Database();
    $db = $database->getConnection();
    
    // Verificar se username já existe
    $check_username_query = "SELECT id FROM users WHERE username = ?";
    $check_username_stmt = $db->prepare($check_username_query);
    $check_username_stmt->execute([$data->username]);
    
    if($check_username_stmt->rowCount() > 0) {
        http_response_code(400);
        echo json_encode(array("message" => "Username already exists"));
        exit;
    }
    
    // Verificar se email já existe
    $check_email_query = "SELECT id FROM users WHERE email = ?";
    $check_email_stmt = $db->prepare($check_email_query);
    $check_email_stmt->execute([$data->email]);
    
    if($check_email_stmt->rowCount() > 0) {
        http_response_code(400);
        echo json_encode(array("message" => "Email already exists"));
        exit;
    }
    
    $query = "INSERT INTO users SET username=?, email=?, password=?";
    $stmt = $db->prepare($query);
    
    $password_hash = password_hash($data->password, PASSWORD_DEFAULT);
    
    if($stmt->execute([$data->username, $data->email, $password_hash])) {
        http_response_code(201);
        echo json_encode(array("message" => "User created successfully"));
    } else {
        http_response_code(503);
        echo json_encode(array("message" => "Unable to create user"));
    }
} else {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create user. Data is incomplete."));
}
?>