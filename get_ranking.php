<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'config.php';

$database = new Database();
$db = $database->getConnection();

$query = "SELECT r.score, r.created_at, u.username 
          FROM rankings r 
          JOIN users u ON r.user_id = u.id 
          ORDER BY r.score DESC, r.time_taken ASC 
          LIMIT 20";
$stmt = $db->prepare($query);
$stmt->execute();

$ranking = array();
$position = 1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $ranking_item = array(
        "position" => $position,
        "username" => $row['username'],
        "score" => $row['score'],
        "date" => $row['created_at']
    );
    array_push($ranking, $ranking_item);
    $position++;
}

http_response_code(200);
echo json_encode($ranking);
?>