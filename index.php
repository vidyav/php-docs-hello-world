<?php
// salesforce_webhook.php
var_dump(file_get_contents('php://input'));
echo "Test displayed";

header("Content-Type: application/json");

$input = json_decode(file_get_contents('php://input'), true);
print_r($input);
//file_put_contents('php://stderr', print_r($input, true)); // Debug logging

// Respond back
echo json_encode(['status' => 'received']);
