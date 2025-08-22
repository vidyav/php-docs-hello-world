<?php
// salesforce_webhook.php
var_dump(file_get_contents('php://input'));
echo "Test displayed";

//header("Content-Type: application/json");

$postData = file_get_contents("php:&# 47;&# 47;input");


$input = json_decode(file_get_contents('php://input'), true);
print_r($_POST);
echo $input;
//file_put_contents('php://stderr', print_r($input, true)); // Debug logging

// Respond back
echo json_encode(['status' => 'received']);
