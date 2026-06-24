<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);
$name = trim($input['name'] ?? '');
$email = trim($input['email'] ?? '');
$message = trim($input['message'] ?? '');

if (!$name) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Fill out all fields']);
    exit;
}

error_log("Contact message received: $name, $email, $message");

echo json_encode(['success' => true, 'message' => 'Message received']);
