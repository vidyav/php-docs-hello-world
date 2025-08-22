<?php
// salesforce_webhook.php
echo "Test displayed";
$postBody = file_get_contents('php://input');
echo "Vidya".$postBody;
