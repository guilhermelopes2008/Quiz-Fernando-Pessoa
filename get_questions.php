<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'config.php';

$database = new Database();
$db = $database->getConnection();

$query = "SELECT id, question_text, question_type, correct_answer, options, explanation FROM questions ORDER BY id";
$stmt = $db->prepare($query);
$stmt->execute();

$questions = array();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $question = array(
        "id" => $row['id'],
        "question" => $row['question_text'],
        "type" => $row['question_type'],
        "answer" => $row['correct_answer'],
        "explanation" => $row['explanation']
    );
    
    if($row['question_type'] == 'multiple' && $row['options']) {
        $question['options'] = json_decode($row['options']);
    }
    
    array_push($questions, $question);
}

http_response_code(200);
echo json_encode($questions);
?>