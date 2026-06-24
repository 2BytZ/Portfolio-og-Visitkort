<?php
header('Content-Type: application/json');

// Load configuration
if (!file_exists('config.php')) {
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => 'Server configuration missing']);
    exit;
}

$config = require 'config.php';

$input = json_decode(file_get_contents('php://input'), true);
$name = trim($input['name'] ?? '');
$email = trim($input['email'] ?? '');
$company = trim($input['company'] ?? '');
$message = trim($input['message'] ?? '');

if (!$name || !$email || !$message) {
    http_response_code(400);
    echo json_encode(['success' => false, 'error' => 'Fill out all fields']);
    exit;
}

try {
    $domain = $config['mailgun']['domain'];
    $apiKey = $config['mailgun']['api_key'];
    $recipientEmail = $config['mailgun']['recipient_email'];
    
    // Build email body
    $emailBody = "Navn: $name\n";
    if ($company) {
        $emailBody .= "Firma: $company\n";
    }
    $emailBody .= "Email: $email\n";
    $emailBody .= "\n---\n\n";
    $emailBody .= $message;
    
    $postData = [
        'from' => "Kontaktformular <noreply@{$domain}>",
        'to' => $recipientEmail,
        'subject' => "Ny kontaktformular besked fra $name",
        'text' => $emailBody,
        'h:Reply-To' => $email
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://api.mailgun.net/v3/{$domain}/messages");
    curl_setopt($ch, CURLOPT_USERPWD, "api:{$apiKey}");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($httpCode !== 200) {
        throw new Exception("Mailgun API error");
    }
    
    error_log("Contact message sent from: $name ($email)");
    echo json_encode(['success' => true, 'message' => 'Message sent successfully']);
    
} catch (Exception $e) {
    http_response_code(500);
    error_log("Failed to send contact message: " . $e->getMessage());
    echo json_encode(['success' => false, 'error' => 'Failed to send message']);
}
