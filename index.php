<?php
// salesforce_webhook.php
echo "Test displayed";

$test = $_POST;
print_r($_POST);

header("Content-Type: application/json");

$input = json_decode(file_get_contents('php://input'), true);
print_r($input, true);
//file_put_contents('php://stderr', print_r($input, true)); // Debug logging

// Respond back
echo json_encode(['status' => 'received']);
