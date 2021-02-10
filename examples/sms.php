<?php
require_once __DIR__ . "/../src/thaibulksms-api/sms.php";

$apiKey = '';
$apiSecretKey = '';

$sms = new \THAIBULKSMS_API\SMS\SMS($apiKey, $apiSecretKey); 

$body = [
    'msisdn' => '',
    'message' => '',
    // 'sender' => '',
    // 'scheduled_delivery' => '',
    // 'force' => ''
];
$res = $sms->sendSMS($body);

if ($res->httpStatusCode == 201) {
    echo "Succes";
    var_dump($res);
} else {
    echo "Error";
    var_dump($res);
}
