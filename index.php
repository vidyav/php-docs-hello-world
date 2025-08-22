<?php
// salesforce_webhook.php

// Get the raw POST data from the request body
$postBody = file_get_contents('php://input');

// Decode the JSON data (assuming Salesforce sends data in JSON format)
$data = json_decode($postBody, true); // true for associative array

// Log the received data for debugging (optional)
file_put_contents('salesforce_log.txt', date('Y-m-d H:i:s') . " - Received data: " . print_r($data, true) . "\n", FILE_APPEND);

// Process the data
if ($data) {
    // Example: Access specific fields from the received data
    $recordId = $data['Id'] ?? null;
    $name = $data['Name'] ?? null;
    $email = $data['Email__c'] ?? null; // Assuming a custom field 'Email__c'

    // Perform actions based on the received data
    // e.g., insert into a database, send an email, update another system
    // ...

    // Send a success response back to Salesforce
    header('Content-Type: application/json');
    echo json_encode(['status' => 'success', 'message' => 'Data received and processed successfully.']);
} else {
    // Handle cases where data is not received or is not valid JSON
    header('Content-Type: application/json');
    http_response_code(400); // Bad Request
    echo json_encode(['status' => 'error', 'message' => 'Invalid or no data received.']);
}
?>
